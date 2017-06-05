<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get brand of product
     */
	public function brand()
	{
		return $this->hasOne('App\Brand');
	}
}
