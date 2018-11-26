<?php

namespace App\Http\Controllers;

use App\MasterSkills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class Skills extends Controller
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
            return redirect('auth')->with('alert', 'You are not loged in!');
        }
        else{
            return view('admin/skills/skills');
        }
    }

    public function data()
    {
        $skills = MasterSkills::select(['id', 'skill', 'status', 'created_at', 'updated_at']);
        
        return Datatables::of(MasterSkills::query())
        ->addColumn('action', function ($skills) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/skills/").'/'.$skills->id.'/edit">Edit</a>
                        <a class="dropdown-item" href="#">Hapus</a>
                    </div>
                    </div>
                </div>
            ';
        })
        ->make(true);
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
            return redirect('auth')->with('alert', 'You are not loged in!');
        }
        else{
            return view('admin/skills/create');
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
        $data =  new MasterSkills();
        $data->skill = $request->get('skill');
        $data->status = $request->get('status');
        $data->created_by = Session::get('id');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/skills')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/admin/skills')->with('alert', 'Gagal menambahkan data!');
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
