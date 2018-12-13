<?php

namespace App\Http\Controllers\User;

use App\Profile;
use Illuminate\Http\Request;

class Profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Profile::all();
        return view('user/profile/profile',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user/profile/create');
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
        $data = new Profile();
        $data->nama_profile = $request->name;
        $data->tempat_lhr_profile = $request->tempatlhr;
        $data->tgl_lhr_profile = $request->datelhr;
        $data->tlp_profile = $request->tlp;
        $data->uid_work = $request->work;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('user/profile/profile');
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
        $data = Profile::where('id', $id)->get();
        return view('user/profile/edit', compact('data'));
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
        $data = Profile::where('id', $id)->first();
        $data->nama_profile = $request->name;
        $data->tempat_lhr_profile = $request->tempatlhr;
        $data->tgl_lhr_profile = $request->datelhr;
        $data->tlp_profile = $request->tlp;
        $data->uid_work = $request->work;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('user/profile/profile')->with('alert-success', 'Data berhasil diubah!');
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
        $data = Profile::where('id', $id)->first();
        $data->delete();
        return redirect()->route('user/profile/profile');
    }
}
