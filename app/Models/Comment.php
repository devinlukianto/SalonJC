<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	 public function news()
     {
        return $this->hasOne('App\Models\News');
     }
}