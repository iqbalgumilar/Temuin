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
            $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                'title' => 'Awards | Temuin',
                'awards' => Award::where('id_profile',$profile->id)->get()
            );
                return view('user/awards/awards')->with($data);
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
                'title' => 'Awards - Create | Temuin',
                'awards' => Award::where('id_profile',$profile->id)->first()
            );
                return view('user/awards/create')->with($data);
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
        $request->validate([
            'award'=>'required',
            'description_award'=>'required',
        ]);

        $profile = Profile::where('id_user',Session::get('id'))->first();

        $data = new Award();
        $data->id_profile = $profile->id;
        $data->award = $request->get('award');
        $data->description_award = $request->get('description_award');

        if($data->save()){
            return redirect('/user/awards')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/awards')->with('alert', 'Gagal menambahkan data!');
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
                'title' => 'Awards - Edit | Temuin',
                //'data' => Award::where('id_profile',$profile->id)->first()
                'awards' => Award::find($id)
            );
            return view('user/awards/edit')->with($data);
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
        $request->validate([
            'award'=>'required',
            'description_award'=>'required',
        ]);
        
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Award::where('id',$id)->first();

        $data->id_profile = $profile->id;
        $data->award = $request->get('award');
        $data->description_award = $request->get('description_award');

        if($data->save()){
            return redirect('/user/awards')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/awards')->with('alert', 'Gagal ubah data!');
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
        $data = Award::where('id',$id)->first();
        if($data != null){
            $data->delete();
            return redirect('/user/awards')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/awards')->with('alert', 'Gagal hapus data!');
        }
    }
}
