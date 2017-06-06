<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class News extends Eloquent
{
	protected $table = 'news';
    protected $fillable = ['title', 'content'];

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}
}