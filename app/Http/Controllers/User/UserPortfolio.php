<?php

namespace App\Http\Controllers\User;

use App\Portofolio;
use App\Profile;
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
            return redirect('user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                    'title' => 'Portofolio | Temuin',
                    'portofolio' => Portofolio::where('id_profile',$profile->id)->get()
                );
                return view('user/portfolio/portfolio')->with($data);
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
            $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                'title' => 'Portofolio - Create | Temuin',
                'portofolio' => Portofolio::where('id_profile',$profile->id)->get()
            );
                return view('user/portfolio/create')->with($data);
            }else{
                return redirect('user/profile/create');
            }
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

        $data = new Portofolio();
        $data->id_profile = $profile->id;
        $data->portofolio = $request->get('portofolio');
        $data->image_portofolio = $request->get('image_portofolio');
        $data->link_portofolio = $request->get('link_portofolio');

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
        $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                'title' => 'Portofolio - Edit | Temuin',
                //'data' => Portofolio::where('id_profile',$profile->id)->first()
                'portofolio' => Portofolio::find($id),
            );
                return view('user/portfolio/edit')->with($data);
            }else{
                return redirect('user/profile/create');
            }
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
        $data = Portofolio::where('id',$id)->first();

        $data->id_profile = $profile->id;
        $data->portofolio = $request->get('portofolio');
        $data->image_portofolio = $request->get('image_portofolio');
        $data->link_portofolio = $request->get('link_portofolio');

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
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Portofolio::where('id', $id)->first();

        if($data != null){
            $data->delete();
            return redirect('/user/portfolio')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/portfolio')->with('alert', 'Gagal hapus data!');
        }
    }
}
