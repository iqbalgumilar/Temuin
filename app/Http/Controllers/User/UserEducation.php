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
        }else{
            $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                    'title' => 'Education | Temuin',
                    'education' => Education::where('id_profile',$profile->id)->get()
                );
                return view('user/education/education')->with($data);
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
                'title' => 'Education - Create | Temuin',
                'education' => Education::where('id_profile',$profile->id)->get()
            );
                return view('user/education/create')->with($data);
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
            'education'=>'required',
            'from_education'=> 'required',
        ]);

        $data = new Education();
        $profile = Profile::where('id_user',Session::get('id'))->first();

        $data->id_profile = $profile->id;
        $data->education = $request->get('education');
        $data->from_education = $request->get('from_education');

        if($data->save()){
            return redirect('/user/education')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/education')->with('alert', 'Gagal menambahkan data!');
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
                'title' => 'Education - Edit | Temuin',
                //'data' => Education::where('id_profile',$profile->id)->first()
                'education' => Education::find($id)
            );
            return view('user/education/edit')->with($data);
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
            'education'=>'required',
            'from_education'=> 'required',
        ]);
        
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Education::where('id', $id)->first();

        $data->id_profile = $profile->id;
        $data->education = $request->get('education');
        $data->from_education = $request->get('from_education');

        if($data->save()){
            return redirect('/user/education')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/education')->with('alert', 'Gagal ubah data!');
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
        $data = Education::where('id', $id)->first();

        if($data != null){
            $data->delete();
            return redirect('/user/education')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/education')->with('alert', 'Gagal hapus data!');
        }
    }
}
