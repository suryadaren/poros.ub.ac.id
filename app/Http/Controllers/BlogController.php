<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;

class BlogController extends Controller
{
    public $division_id = "1";

    public function blog($id){
        $division_id = $id;
        $blog = Blog::where([
            'division_id' => $id,
            'user_id' => auth()->id()
        ])->get();
        $admin = User::where('id',auth()->id())->first();
        return view('admin/content_blog', ["blog" => $blog, "admin" => $admin]);
    }

    public function add_blog(Request $request){
    	$file = $request->file('Foto');
        $user_id = auth()->id();
        $title = $request->title;
        $youtube = $request->youtube;
        $description = $request->description;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Blog::create([
            'user_id' => $user_id,
            'division_id' => $this->division_id,
            'title' => $title,
            'youtube' => $youtube,
            'description' => $description,
            'photo' => $photo
        ]);
        return redirect(url('admin/blog/'.$this->division_id));
    }

    public function edit_blog(Request $request){
        $file = $request->file('Foto');
        $id = $request->Id;
        $title = $request->title;
        $youtube = $request->youtube;
        $description = $request->description;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Blog::find($id)->update([
            'title' => $title,
            'youtube' => $youtube,
            'description' => $description,
            'photo' => $photo
        ]);
        return redirect(url('admin/blog/'.$this->division_id));
    	
    }

    public function hapus_blog(Request $request){
    	$id = $request->Id;
        Blog::find($id)->delete();
        return redirect(url('admin/blog/'.$this->division_id)); 
    }
}
