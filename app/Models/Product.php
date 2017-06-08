<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    protected static function boot()
    {
        parent::boot();
    
        //event pada saat model disimpan
        static::saved(function($model) {
            Cache::forget('products');
        });

        //event pada saat model dihapus
        static::deleted(function($model) {
            Cache::forget('products');
        });
    }

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'products';

    protected $fillable = ['name','price','stock','description','brand_id','category_id'];

    /**
     * Get brand of product
     */
	public function brand()
	{
		return $this->belongsTo('App\Models\Brand');
	}
    //
    public function category(){
    	return $this->belongsTo('App\Models\Category' );
    }
}
