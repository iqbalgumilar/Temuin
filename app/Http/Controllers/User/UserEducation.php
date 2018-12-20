<?php

namespace App\Http\Controllers\User;

use App\Education;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserEducation extends Controller
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
            $profile = Profile::where('id_user',Session::get('id'))->first();
            $data = Education::where('id_profile',$profile->id)->first();
            
            if($data != null){
                return view('user/cv/education/education', compact('data'));
            }else{
                return redirect('user/cv/education/create');
            }
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
            return redirect('user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            return view('user/cv/education/create');
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
        $data = new Education();

        $profile = Profile::where('id_user',Session::get('id'))->first();

        $data->id_profile = $profile->id;
        $data->education = $request->get('education');
        $data->from_education = $request->get('from_education');

        if($data->save()){
            return redirect('/user/cv/education')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/cv/education')->with('alert', 'Gagal menambahkan data!');
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
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Education::where('id_profile', $profile->id)->first();
        return view('user/cv/education/edit', compact('data'));
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
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Education::where('id_profile', $profile->id)->first();

        $data->id_profile = $profile->id;
        $data->education = $request->get('education');
        $data->from_education = $request->get('from_education');

        if($data->save()){
            return redirect('/user/cv/education')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/cv/education')->with('alert', 'Gagal ubah data!');
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
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Education::where('id_profile', $profile->id)->first();

        if($data->delete()){
            return redirect('/user/cv/education')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/cv/education')->with('alert', 'Gagal hapus data!');
        }
    }
}
