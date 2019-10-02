<?php

namespace App;

class Official extends Model
{
    public function department(){
    	return $this->belongsTo(Department::class);
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
