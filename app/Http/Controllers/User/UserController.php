<?php

namespace App\Http\Controllers\User;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!session::get('login')){
            return redirect('/user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = Users::find(Session::get('id'))->first();
            return view('user/user/user',compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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
        $data = Users::find(Session::get('id'))->first();
        return view('user/user/edit', compact('data'));
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
        $data = Users::where('id', $id)->first();

        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = $request->password;

        if($data->save()){
            return redirect('/user/user')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/user')->with('alert', 'Gagal ubah data!');
        }
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
        $data = Users::where('id', $id)->first();
        if($data->delete()){
            return redirect('/user/user')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/user')->with('alert', 'Gagal hapus data!');
        }
    }
}
