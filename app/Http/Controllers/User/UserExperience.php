<?php

namespace App\Http\Controllers\User;

use App\Masterworks;
use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class UserExperience extends Controller
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
            $works = Masterworks::all();
            $data = Experience::where('id_profile', Session::get('id'))->first();
            return view('user/cv/experience/experience',compact('data','works'));
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
            $works = MasterWorks::all();
            return view('user/cv/experience/create',compact('works'));
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
        $data = new Experience();
        $data->id_profile = Session::get('id');
        $data->uid_work = $request->uid_work;
        $data->from_experience = $request->from_experience;
        $data->date_first_experience = $request->date_first_experience;
        $data->date_last_experience = $request->date_last_experience;

        if($data->save()){
            return redirect('/user/cv/experience')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/cv/experience')->with('alert', 'Gagal menambahkan data!');
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
        $works = MasterWorks::all();
        $data = Experience::where('id_profile', Session::get('id'))->first();
        return view('user/cv/experience/edit', compact('data','works'));
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
        $data = Experience::where('id_profile', $id)->first();

        $data->id_profile = Session::get('id');
        $data->uid_work = $request->uid_work;
        $data->from_experience = $request->from_experience;
        $data->date_first_experience = $request->date_first_experience;
        $data->date_last_experience = $request->date_last_experience;

        if($data->save()){
            return redirect('/user/cv/experience')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/cv/experience')->with('alert', 'Gagal ubah data!');
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
