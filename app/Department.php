<?php

namespace App;

class Department extends Model
{
    public function events(){
    	return $this->hasMany(Event::class);
    }
    public function staffs(){
    	return $this->belongsToMany(Department::class, 'staffs', 'department_id', 'user_id')->withPivot('year');
    }
    public function officials(){
        return $this->belongsToMany(Department::class, 'officials', 'department_id', 'user_id')->withPivot('position', 'quote', 'year');
    }
}
