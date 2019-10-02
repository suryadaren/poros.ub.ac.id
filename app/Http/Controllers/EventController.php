<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

class EventController extends Controller
{
    public $department_id = "1";

    public function event($id){
        $department_id = $id;
    	$event = Event::where([
            'department_id' => $id,
            'user_id' => auth()->id()
        ])->get();
		$admin = User::where('id',auth()->id())->first();
        return view('admin/content_event', ["event" => $event, "admin" => $admin]);
    }

    public function add_event(Request $request){
    	$file = $request->file('Foto');
        $user_id = auth()->id();
        $title = $request->title;
        $date = $request->date;
        $ticket = $request->ticket;
        $quota = $request->quota;
        $description = $request->description;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Event::create([
            'user_id' => $user_id,
            'department_id' => $this->department_id,
            'title' => $title,
            'date' => $date,
            'ticket' => $ticket,
            'quota' => $quota,
            'description' => $description,
            'photo' => $photo
        ]);
        return redirect(url('admin/event/'.$this->department_id));
    }

    public function edit_event(Request $request){
        $file = $request->file('Foto');
        $id = $request->Id;
        $title = $request->title;
        $date = $request->date;
        $ticket = $request->ticket;
        $quota = $request->quota;
        $description = $request->description;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Event::find($id)->update([
            'title' => $title,
            'date' => $date,
            'ticket' => $ticket,
            'quota' => $quota,
            'description' => $description,
            'photo' => $photo
        ]);
        return redirect(url('admin/event/'.$this->department_id));
    	
    }

    public function hapus_event(Request $request){
    	$id = $request->Id;
        Event::find($id)->delete();
        return redirect(url('admin/event/'.$this->department_id)); 
    }
}
