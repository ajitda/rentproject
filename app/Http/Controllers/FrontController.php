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
    	$adds = Add::latest()->get();
    	return view('front', compact('adds', 'hosts'));
    }
}
