<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Host extends Authenticatable
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'city', 'state', 'zip', 'country'];

    public static $validationRules = array(
    	'name' => 'required|string',
    	'email' => 'required|unique:host|email',
    	'phone' => 'required|integer',
    	'address' => 'required|string',
    	'city' => 'required|string',
    	'state' => 'required|string',
    	'zip'=> 'required|min:4|max:6',
    	'country' => 'required|integer'
    );

    public function user()
    {
    	return $this->morphOne(User::class, 'user_type');
    }
}
