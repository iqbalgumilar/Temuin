<?php

namespace App\Http\Controllers\User;

use App\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserPortfolio extends Controller
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
            return redirect('authUser')->with('alert', 'You are not loged in!');
        }
        else{
            $data = Portofolio::where('id_profile', Session::get('id'))->first(); 
            return view('user/portfolio/portfolio',compact('data'));
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
        if(!session::get('login')){
            return redirect('authUser')->with('alert', 'You are not loged in!');
        }
        else{
            return view('user/portfolio/create');
        }
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
        $data = new Portofolio();
        $data->id_profile = Session::get('id');
        $data->portofolio = $request->portofolio;
        $data->image_portofolio = $request->image_portofolio;
        $data->link_portofolio = $request->link_portofolio;

        if($data->save()){
            return redirect('/user/portfolio')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/portfolio')->with('alert', 'Gagal menambahkan data!');
        }
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
        $data = Portofolio::where('id_profile', Session::get('id'))->first();
        return view('user/portfolio/edit', compact('data'));
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
        $data = Portofolio::where('id_profile', $id)->first();

        $data->id_profile = Session::get('id');
        $data->portofolio = $request->portofolio;
        $data->image_portofolio = $request->image_portofolio;
        $data->link_portofolio = $request->link_portofolio;

        if($data->save()){
            return redirect('/user/portfolio')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/portfolio')->with('alert', 'Gagal ubah data!');
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
    }
}
