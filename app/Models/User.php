<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 30 May 2017 07:04:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property string $id
 * @property string $password
 * @property string $email
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password',
		'email'
	];
}
