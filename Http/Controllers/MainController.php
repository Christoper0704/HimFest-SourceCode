<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    function save(Request $request){
        
        //Validate requests
        $parameter = $request->submit;

        //Insert data into table Team
        if($parameter == "1")
        {
            $request->validate([
                'name'=>'required|unique:teams,name',
                'password'=>'required|min:6|max:12'
            ]);
            $id = Helper::IDGenerator(new Team, 'leader_id',2,'24');
            $team = new Team;
            $team->leader_id = $id;
            $team->name = $request->name;
            $team->password = Hash::make($request->password);
            $team->category = $request->category;
            $save = $team->save();
            
            if($save){
                $member = new Member;
                $member->team_id = $id;
                $member->name = $request->name;
                $save = $member->save();
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
                return redirect('admin/dashboard')->with('Success','New User has been successfuly added to database');
            }else{
                return back()->with('fail','Something went wrong, try again later');
            }
            };
    }

    function getIDLeader($leader_id){
        $data = Member::where('team_id','=', $leader_id)->first();
        $data2 = Team::where('leader_id','=', $leader_id)->first();
        $data2->leader_id = $leader_id.$data->id;
        $data->save();
        $data2->save();
        return redirect('auth/login')->with('Success','New User has been successfuly added to database');
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        $userInfo = Team::where('name','=', $request->name)->first();
        $userInfo2 = Member::where('name','=', $request->name)->first();

        $input = $request->all();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your team name');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                $request->session()->put('LoggedUser2',$userInfo2->team_id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
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

    public function adminHome()
    {
        return view('adminHome');
    }

}