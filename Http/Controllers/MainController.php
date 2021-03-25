<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\Admin;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function registerteam(){
        return view('auth.register-team');
    }
    function registermember(){
        return view('auth.register-member');
    }
    function adminlogin(){
        return view('auth.adminlogin');
    }


    function save(Request $request){
        
        //Validate requests
        $parameter = $request->submit;

        //Insert data into table Team
        if(Team::where('name','=', $request->teamname)->exists()){
            if(Team::where('category','=',$request->category)->exists()){
                return back()->with('fail','Nama Team telah terpakai');
            }
        }
        if($parameter == "1")
        {
            $request->validate([
                'password'=>'required|min:6|max:12'
            ]);
            $id = Helper::IDGenerator(new Team, 'id',3,'21');
            $team = new Team;
            $member = new Member;
            $team->id = $id;
            $member->team_id = $id;
            $member->name = $request->name;
            $member->email = $request->email;
            $member->lineid = $request->lineid;
            $member->phone = $request->phone;
            $team->leader_id = $id;
            $team->name = $request->teamname;
            $team->password = Hash::make($request->password);
            $team->category = $request->category;
            $team->referrer = $request->referrer;
            $save = $team->save();
            $save = $member->save();
            
            if($save){
                return $this->getIDLeader($team->leader_id);
            }else{
                return back()->with('fail','Something went wrong, try again later');
            }
        };
        if($parameter == "2")
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required'
            ]);

            //Insert data into table Member
            $data = Member::where('team_id','=', session('LoggedUser2'))->first();
            $member = new Member;
            $member->name = $request->name;
            $member->email = $request->email;
            $member->team_id = $data->team_id;
            $member->lineid = $request->lineid;
            $member->phone = $request->phone;
            $member->studentcard = $request->studentcard;
            $save = $member->save();
            
            if($save){
                return $this->updateIDmember($member->id);
                
            }else{
                return back()->with('fail','Something went wrong, try again later');
            }
            };
    }

    function getIDLeader($leader_id){
        $data = Member::where('team_id','=', $leader_id)->first();
        $data2 = Team::where('leader_id','=', $leader_id)->first();
        $data2->leader_id = $leader_id.$data->id;
        $data->member_id = $data2->leader_id;
        $data2->id = $data->team_id;
        $data->save();
        $data2->save();
        return redirect('auth/login')->with('Success','New User has been successfuly added to database');
    }

    function updateIDmember($member_id){
        $data = Member::where('id','=', $member_id)->first();
        $data->member_id = $data->team_id.$data->id;
        $data->save();
        return redirect('admin/dashboard')->with('Success','New User has been successfuly added to database');
    }

    function check(Request $request){
        $parameter = $request->submit;

        if($parameter == "1"){
        //Validate requests
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        $userInfo = Team::where('name','=', $request->name)->first();
        $teamid = $userInfo->id;

        if(!$userInfo){
            return back()->with('fail','We do not recognize your team name');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                $request->session()->put('LoggedUser2',$teamid);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
        if($parameter == "2")
        {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]);
            $userInfo = Admin::where('email','=', $request->email)->first();

            if(!$userInfo){
                return back()->with('fail','We do not recognize your team name');
            }else{
                //check password
                if(Hash::check($request->password, $userInfo->password)){
                    $request->session()->put('LoggedUser',$userInfo->id);
                    return redirect('admin/admin_dashboard');
                }else{
                    return back()->with('fail','Incorrect password');
                }
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo' =>Team::where('id','=', session('LoggedUser'))->first()];
        $users = Member::where('team_id','=',session('LoggedUser2'))->get();
        return view('admin.dashboard',['member'=>$users],$data);
    }

    function admindashboard(){
        $data = ['LoggedUserInfo' =>Admin::where('id','=', session('LoggedUser'))->first()];
        $team = Team::all();
        $member = Member::all();
        return view('admin.admin_dashboard',$data,['member'=>$member,'team'=>$team]);
    }
}