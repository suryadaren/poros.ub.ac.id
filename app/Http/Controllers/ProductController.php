<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class ProductController extends Controller
{
    public $division_id = "1";

    public function product($id){
        $division_id = $id;
        $product = Product::where([
            'division_id' => $id,
            'user_id' => auth()->id()
        ])->get();
        $admin = User::where('id',auth()->id())->first();
        return view('admin/content_product', ["product" => $product, "admin" => $admin]);
    }

    public function add_product(Request $request){
    	$file = $request->file('Foto');
        $user_id = auth()->id();
        $name = $request->name;
        $link = $request->link;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Product::create([
            'user_id' => $user_id,
            'division_id' => $this->division_id,
            'name' => $name,
            'link' => $link,
            'photo' => $photo
        ]);
        return redirect(url('admin/product/'.$this->division_id));
    }

    public function edit_product(Request $request){
        $file = $request->file('Foto');
        $id = $request->Id;
        $name = $request->name;
        $link = $request->link;
        $photo = $file->getClientOriginalName();
        $file->move('upload',$file->getClientOriginalName());
        Product::find($id)->update([
            'name' => $name,
            'link' => $link,
            'photo' => $photo
        ]);
        return redirect(url('admin/product/'.$this->division_id));
    	
    }

    public function hapus_product(Request $request){
    	$id = $request->Id;
        Product::find($id)->delete();
        return redirect(url('admin/product/'.$this->division_id)); 
    }
}
