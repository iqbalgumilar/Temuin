<?php

namespace App\Http\Controllers\User;

use App\MasterSkills;
use App\Skill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            return redirect('authUser')->with('alert', 'You are not loged in!');
        }
        else{
            $skills = MasterSkills::all();
            $data = Skill::where('id_profile', Session::get('id'))->first();
            return view('user/cv/skill/skill',compact('data','skills'));
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
            return redirect('authUser')->with('alert', 'You are not loged in!');
        }
        else{
            $skills = MasterSkills::all();
            return view('user/cv/skill/create',compact('skills'));
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
        $data = new Skill();
        $data->id_profile = Session::get('id');
        $data->uid_skill = $request->uid_skill;
        $data->persentase_skill = $request->persentase_skill;

        if($data->save()){
            return redirect('/user/cv/skill')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/user/cv/skill')->with('alert', 'Gagal menambahkan data!');
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
        $skills = MasterSkills::all();
        $data = Skill::where('id_profile', Session::get('id'))->first();
        return view('user/cv/skill/edit', compact('data','skills'));
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
        $data = Skill::where('id_profile', $id)->first();

        $data->id_profile = Session::get('id');
        $data->uid_skill = $request->uid_skill;
        $data->persentase_skill = $request->persentase_skill;

        if($data->save()){
            return redirect('/user/cv/skill')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/cv/skill')->with('alert', 'Gagal ubah data!');
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
    }
}
