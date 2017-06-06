<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Eloquent
{
	Use SoftDeletes;

	protected $table = 'news';
    protected $fillable = ['title', 'content'];
    protected $dates = ['deleted_at'];
    
	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}
}