<?php

namespace App;

class Blog extends Model
{
    protected $guarded = ['created at','updated_at'];
	// protected static function boot(){
	// 	parent::boot();
	// 	//setiap delete blog, bakal delete semua commentnya
	// 	static::deleting(function ($blog){
	// 		$blog->comments->each->delete();
	// 	});
	// }
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function division(){
    	return $this->belongsTo(Division::class);
    }
    public function comments(){
    	return $this->hasMany(Blog::class);
    }
}
