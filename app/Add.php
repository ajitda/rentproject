<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $fillable = ['name', 'description', 'image', 'type', 'price', 'user_id', 'add_category_id'];
}
