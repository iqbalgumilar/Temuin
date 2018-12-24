<?php

namespace App\Http\Controllers\User;

use App\Masterworks;
use App\Experience;
use App\Profile;
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
            return redirect('/user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $datas = array(
                'title' => 'User - Experience | Temuin'
            );
            //$works = Masterworks::all();
            $profile = Profile::where('id_user',Session::get('id'))->first();
            $data = Experience::where('id_profile',$profile->id)->first();

            if($data != null){
                $works = MasterWorks::where('id', $data->uid_work)->first();
                return view('user/cv/experience/experience', compact('data','works'))->with($datas);
            }else{
                return redirect('user/cv/experience/create');
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
                'title' => 'User - Experience Create | Temuin'
            );
            $works = MasterWorks::all();
            return view('user/cv/experience/create',compact('works'))->with($datas);
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
        
        $data = new Experience();
        $data->id_profile = $profile->id;
        $data->uid_work = $request->get('uid_work');
        $data->from_experience = $request->get('from_experience');
        $data->date_first_experience = $request->get('date_first_experience');
        $data->date_last_experience = $request->get('date_last_experience');

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
        $datas = array(
                'title' => 'User - Experience Edit | Temuin'
            );
        $works = MasterWorks::all();
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Experience::where('id_profile', $profile->id)->first();
        return view('user/cv/experience/edit', compact('data','works'))->with($datas);
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
        $works = MasterWorks::all();
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Experience::where('id_profile', $profile->id)->first();

        $data->id_profile = $profile->id;
        $data->uid_work = $request->get('uid_work');
        $data->from_experience = $request->get('from_experience');
        $data->date_first_experience = $request->get('date_first_experience');
        $data->date_last_experience = $request->get('date_last_experience');

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
        $works = MasterWorks::all();
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Experience::where('id_profile', $profile->id)->first();

        if($data != null){
            $data->delete();
            return redirect('/user/cv/experience')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/cv/experience')->with('alert', 'Gagal hapus data!');
        }
    }
}
