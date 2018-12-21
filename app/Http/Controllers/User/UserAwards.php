<?php

namespace App\Http\Controllers\User;

use App\Award;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserAwards extends Controller
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
            $data = Award::where('id_profile',$profile->id)->first();

            if($data != null){
                return view('user/cv/awards/awards', compact('data'));
            }else{
                return redirect('user/cv/awards/create');
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
            return view('user/cv/awards/create');
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
        $profile = Profile::where('id_user',Session::get('id'))->first();

        $data = new Award();
        $data->id_profile = $profile->id;
        $data->award = $request->get('award');
        $data->description_award = $request->get('description_award');
        $data->icon_award = $request->get('icon_award');
        $data->image_award = $request->get('image_award');

        if($data->save()){
            return redirect('/user/cv/awards')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/cv/awards')->with('alert', 'Gagal menambahkan data!');
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
        $data = Award::where('id_profile',$profile->id)->first();
        return view('user/cv/awards/edit', compact('data'));
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
        $data = Award::where('id_profile',$profile->id)->first();

        $data->id_profile = $profile->id;
        $data->award = $request->get('award');
        $data->description_award = $request->get('description_award');
        $data->icon_award = $request->get('icon_award');
        $data->image_award = $request->get('image_award');

        if($data->save()){
            return redirect('/user/cv/awards')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/cv/awards')->with('alert', 'Gagal ubah data!');
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
        $data = Award::where('id_profile',$profile->id)->first();
        if($data != null){
            $data->delete();
            return redirect('/user/cv/awards')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/cv/awards')->with('alert', 'Gagal hapus data!');
        }
    }
}
