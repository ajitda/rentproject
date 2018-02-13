<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $fillable = ['name', 'description', 'image', 'type', 'price', 'host_id', 'add_category_id'];

    public function add_category(){
    	return $this->belongsTo('App\AddCatagory');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function host(){
    	return $this->belongsTo('App\Host');
    }
}
