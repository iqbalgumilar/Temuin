<?php

namespace App\Http\Controllers\User;

use App\MasterSkills;
use App\ViewSkills;
use App\Skill;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserSkills extends Controller
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
        }else{
            $profile = Profile::where('id_user',Session::get('id'));
            if($profile->count() > 0){
                $profile = $profile->first();
                $data = array(
                    'title' => 'Skills | Temuin',
                    'skill' => ViewSkills::where('id_profile',$profile->id)->get(),
            );
                return view('user/skill/skill')->with($data);
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
                    'title' => 'Skills - Create | Temuin',
                    'skill' => Skill::where('id_profile',$profile->id)->get(),
                    'uid_skill' => MasterSkills::all(),
            );
                return view('user/skill/create')->with($data);
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

        $data = new Skill();
        $data->id_profile = $profile->id;
        $data->uid_skill = $request->get('uid_skill');
        $data->persentase_skill = $request->get('persentase_skill');

        if($data->save()){
            return redirect('/user/skill')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/skill')->with('alert', 'Gagal menambahkan data!');
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
                    'title' => 'Skills - Edit | Temuin',
                    //'Skill' => Skill::where('id_profile',$profile->id)->get(),
                    'skill' => Skill::find($id),
                    'uid_skill' => MasterSkills::all(),
                );
                return view('user/skill/edit')->with($data);
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
        $skills = MasterSkills::all();
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Skill::where('id', $id)->first();

        $data->id_profile = $profile->id;
        $data->uid_skill = $request->get('uid_skill');
        $data->persentase_skill = $request->get('persentase_skill');

        if($data->save()){
            return redirect('/user/skill')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/skill')->with('alert', 'Gagal ubah data!');
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
        $skills = MasterSkills::all();
        $profile = Profile::where('id_user',Session::get('id'))->first();
        $data = Skill::where('id', $id)->first();

        if($data != null){
            $data->delete();
            return redirect('/user/skill')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/skill')->with('alert', 'Gagal hapus data!');
        }
    }
}
