<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
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
