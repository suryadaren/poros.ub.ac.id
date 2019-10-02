<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\Department;
use App\Division;
use App\Event;
use App\Official;
use App\Product;
use App\User;

class HomeController extends Controller
{
    public function home(){
        $dep = Department::all();
        $div = Division::all();
        $prod = Product::all();
        $blog = Blog::all();
        $event = Event::all();
        $official = Official::all();
        $user = User::all();
        return view('contents/home',[
         'dep' => $dep,
         'div' => $div,
         'prod' => $prod,
         'blog' => $blog,
         'event' => $event,
         'official' => $official,
         'user' => $user
        ]);
    }
}
