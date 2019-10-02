<?php

namespace App;

class Division extends Model
{
    public function blogs(){
    	return $this->hasMany(Blog::class);
    }
    public function staffs(){
    	return $this->belongsToMany(User::class, 'staffs', 'division_id', 'user_id')->withPivot('year');
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
