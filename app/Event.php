<?php

namespace App;

class Event extends Model
{
	protected $guarded = ['created at','updated_at'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function department(){
    	return $this->belongsTo(Department::class);
    }
}
