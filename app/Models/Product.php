<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
