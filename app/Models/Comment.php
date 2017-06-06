<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	protected $table = 'comments';
    protected $fillable = ['content'];

	public function news()
	{
		return $this->belongsTo('App\Models\News');
	}
}