<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add;
use App\Host;
class FrontController extends Controller
{
    public function index()
    {
    	$hosts = Host::latest()->get();
    	$adds = Add::latest()->where('type', 1)->get();
    	return view('front', compact('adds', 'hosts'));
    }

    public function showadd($id)
    {
    	$add = Add::findOrFail($id);
    	return view('adds.show', compact('add'));
    }
}
