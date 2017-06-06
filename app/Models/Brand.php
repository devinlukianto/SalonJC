<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
	protected $table = 'brands';

	protected $fillable = ['name','description','company','company_phone','company_address'];

    public function products()
	{
		return $this->hasMany('App\Models\Product');
	}
}
