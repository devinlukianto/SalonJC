<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;	

class Category extends Model
{
    //
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];
    protected $dates = ['deleted_at'];

    public function products(){
    	return $this->hasMany('App\Models\Product');	
    }

    protected static function boot()
	{
	    parent::boot();

	    // event pada saat model disimpan
	    static::saved(function ($model) {
	        Cache::forget('categoriescache');
	    });

	    // event pada saat model dihapus
	    static::deleted(function ($model) {
	        Cache::forget('categoriescache');
	    });
	}
}
