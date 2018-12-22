<?php

namespace App\Http\Controllers\User;

use App\MasterWorks;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Profiles extends Controller
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
            //$works = MasterWorks::all();
            $data = Profile::where('id_user', Session::get('id'))->first();
            
            if($data != null){
                $works = MasterWorks::where('id', $data->uid_work)->first();
                return view('user/profile/profile', compact('data','works'));
            }else{
                return redirect('user/profile/create');
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
            $works = MasterWorks::all();      
            return view('user/profile/create',compact('works'));
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
        
        $data = new Profile();
        $data->id_user = Session::get('id');
        $data->nama_profile = $request->name;
        $data->tempat_lhr_profile = $request->tempatlhr;
        $data->tgl_lhr_profile = $request->datelhr;
        $data->tlp_profile = $request->tlp;
        $data->uid_work = $request->uid_work;
        $data->alamat = $request->alamat;

        if($data->save()){
            return redirect('/user/profile')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/profile')->with('alert', 'Gagal menambahkan data!');
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
        $data = Profile::where('id_user', Session::get('id'))->first();
        return view('user/profile/edit', compact('data','works'));
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
        $data = Profile::where('id_user', $id)->first();

        $data->nama_profile = $request->name;
        $data->tempat_lhr_profile = $request->tempatlhr;
        $data->tgl_lhr_profile = $request->datelhr;
        $data->tlp_profile = $request->tlp;
        $data->uid_work = $request->uid_work;
        $data->alamat = $request->alamat;

        if($data->save()){
            return redirect('/user/profile')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/profie')->with('alert', 'Gagal ubah data!');
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
        $data = Profile::where('id_user', $id)->first();
        if($data != null){
            $data->delete();
            return redirect('/user/profile')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/profile')->with('alert', 'Gagal hapus data!');
        }
    }
}
