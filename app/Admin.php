<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $hidden = [
        'name', 'email','phone'
    ];

    public function user_type()
    {
        return $this->morphTo();
    }
    public function hasRole($user_type = null)
    {
        if($user_type){
            return $this->user_type == $user_type;
        }
        return $this->user_type;
    }
}
