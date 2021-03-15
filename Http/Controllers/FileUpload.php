<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Member;

class FileUpload extends Controller
{
  public function createForm(){
    return view('file-upload');
  }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,docx,jpg,jpeg,png|max:2048'
        ]);

        $fileModel = new File;
        $users = Member::where('team_id','=',session('LoggedUser2'))->first();

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->team_id = $users->team_id;
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }

}