<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

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

	protected static function boot()
	{
	    parent::boot();

	    // event pada saat model disimpan
	    static::saved(function ($model) {
            Cache::forget('newscache');
        });

	    // event pada saat model dihapus
	    static::deleted(function ($model) {
            Cache::forget('newscache');
        });
	}
}