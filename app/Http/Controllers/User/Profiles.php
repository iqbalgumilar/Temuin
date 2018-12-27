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
            $datas = array(
                'title' => 'Profile | Temuin'
            );
            $data = Profile::where('id_user', Session::get('id'))->first();
            
            if($data != null){
                $works = MasterWorks::where('id', $data->uid_work)->first();
                return view('user/profile/profile', compact('data','works'))->with($datas);
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
            $datas = array(
                'title' => 'Profile - Create | Temuin'
            );
            $works = MasterWorks::all();      
            return view('user/profile/create',compact('works'))->with($datas);
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
        
        $request->validate([
            'name' => 'required',
            'tempatlhr' => 'required',
            'datelhr' => 'required',
            'tlp' => 'required',
            'uid_work' => 'required',
            'alamat' => 'required',
        ]);
        
        $data = new Profile();
        $data->id_user = Session::get('id');
        $data->nama_profile = $request->get('name');
        $data->tempat_lhr_profile = $request->get('tempatlhr');
        $data->tgl_lhr_profile = $request->get('datelhr');
        $data->tlp_profile = $request->get('tlp');
        $data->uid_work = $request->get('uid_work');
        $data->alamat = $request->get('alamat');

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
        $datas = array(
                'title' => 'Profile - Edit | Temuin'
            );
        $works = MasterWorks::all();
        $data = Profile::where('id_user', Session::get('id'))->first();
        return view('user/profile/edit', compact('data','works'))->with($datas);
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
        $request->validate([
            'name' => 'required',
            'tempatlhr' => 'required',
            'datelhr' => 'required',
            'tlp' => 'required',
            'uid_work' => 'required',
            'alamat' => 'required',
        ]);
        
        $data = Profile::where('id_user', $id)->first();

        $data->nama_profile = $request->get('name');
        $data->tempat_lhr_profile = $request->get('tempatlhr');
        $data->tgl_lhr_profile = $request->get('datelhr');
        $data->tlp_profile = $request->get('tlp');
        $data->uid_work = $request->get('uid_work');
        $data->alamat = $request->get('alamat');

        if($data->save()){
            return redirect('/user/profile')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/profile')->with('alert', 'Gagal ubah data!');
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
