<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Blog;
use App\Product;

class AdminController extends Controller
{
	public function dashboard(){
		$admin = User::where('id',auth()->id())->first();
        return view('admin/content_dashboard', ["admin" => $admin]);
    }

    public function member(){
    	$user = User::all();
		$admin = User::where('id',auth()->id())->first();
        return view('admin/content_member', ["user" => $user, "admin" => $admin]);
    }

    public function add_member(Request $request){
        $file = $request->file('Foto');
        $name = $request->name;
        $nim = $request->nim;
        $dob = $request->dob;
        $mobile = $request->mobile;
        $email = $request->email;
        $pass = md5($request->pass);
        $level = $request->level;
        $foto = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());

        User::create([
            "name" => $name,
            "nim" => $nim,
            "dob" => $dob,
            "mobile" => $mobile,
            "email" => $email,
            "photo" => $foto,
            "password" => $pass,
            "level" => $level
        ]);

        return redirect( url('/admin/member'));
    }

    public function edit_member(Request $request){
        $file = $request->file('Foto');
        $id = $request->Id;
        $name = $request->name;
        $nim = $request->nim;
        $dob = $request->dob;
        $mobile = $request->mobile;
        $email = $request->email;
        $pass = md5($request->pass);
        $level = $request->level;
        $foto = $file->getClientOriginalName();
        $file->move("upload",$file->getClientOriginalName());

        User::find($id)->update([
            "name" => $name,
            "nim" => $nim,
            "dob" => $dob,
            "mobile" => $mobile,
            "email" => $email,
            "photo" => $foto,
            "password" => $pass,
            "level" => $level
        ]);

        return redirect( url('/admin/member'));
    }

    public function hapus_member(Request $request){
        User::find($request->Id)->delete();
        return redirect( url('/admin/member'));
    }
}
