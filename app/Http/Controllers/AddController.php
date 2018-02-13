<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add;
use App\AddCatagory;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $adds = Add::all();
        return view('adds.index', compact('adds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addcategories = AddCatagory::all();
        return view('adds.create', compact('addcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($input['image']){
            $input['image'] = $this->upload($input['image']);
        }else{
            $input['image'] = 'images/adds/default.jpg';
        }
        $input['host_id']=Auth::user()->user_type_id;
        Add::create($input);
        return redirect('adds');
    }

    public function upload($file)
    {
        $extension = $file->getClientOriginalExtension();
        $sha = sha1($file->getClientOriginalName());
        $filename = date('Y-m-d-h-i-s')."-".$sha.".".$extension;
        $path = 'images/adds/';
        $file->move($path, $filename);
        return 'images/adds/'.$filename;
    }

    public function publish($id)
    {
        $add = Add::findOrFail($id);
        $add->type = '1';
        $add->update();
        return redirect()->back();
    }

    public function unpublish($id)
    {
        $add = Add::findOrFail($id);
        $add->type = '0';
        $add->update();
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
