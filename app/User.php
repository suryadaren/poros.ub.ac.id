<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at','updated_at' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];
    public function departments(){
        if($this->enum === "official"){
            return $this->belongsToMany(Department::class, 'officials')->withPivot('position', 'quote', 'year');
        }
        else{
            return $this->belongsToMany(Department::class, 'staffs')->withPivot('year');
        }
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    public function divisions(){
        return $this->belongsToMany(Division::class, 'staffs', 'user_id', 'division_id')->withPivot('year');
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
}
