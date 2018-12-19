<?php

namespace App\Http\Controllers\User;

use App\Education;
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
            $data = Education::where('id_profile',Session::get('id'))->first();
            
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
        $data->id_profile = Session::get('id');
        $data->education = $request->education;
        $data->from_education = $request->from_education;

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
         $data = Education::find($id);
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
        $data = Education::where('id', $id)->first();

        $data->education = $request->education;
        $data->from_education = $request->from_education;

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
        $data = Education::where('id', $id)->first();
        if($data->delete()){
            return redirect('/user/cv/education')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/cv/education')->with('alert', 'Gagal hapus data!');
        }
    }
}
