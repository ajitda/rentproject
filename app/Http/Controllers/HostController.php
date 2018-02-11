<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Host;
use App\User;
use Validator;
class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hosts = Host::all();
        return view('hosts.index', compact('hosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|unique:host|email',
            'phone' => 'required|integer',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip'=> 'required|min:4|max:6',
            'country' => 'required|integer',
            'password' => 'required|min:6|max:8'             
        ]);
        $input = $request->all();
        $host = Host::create($input);
        User::create([
            'name' => $host->name,
            'email' => $host->email,
            'password' => bcrypt($request->password),
            'user_type_id' =>$host->id,
            'user_type' => 'host'
        ]);
        return redirect('hosts');
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
