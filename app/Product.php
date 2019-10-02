<?php

namespace App;

class Product extends Model
{
	protected $guarded = ['created at','updated_at'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function division(){
    	return $this->belongsTo(Division::class);
    }
}
