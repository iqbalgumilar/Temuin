<?php

namespace App\Http\Controllers\Admin;

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
            return redirect('admin/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Skills | Temuin"
            );
            return view('admin/skills/skills')->with($data);
        }
    }

    public function data()
    {
        $skills = MasterSkills::select(['id', 'skill', 'status', 'created_at', 'updated_at']);
        $no = 1;
        return Datatables::of(MasterSkills::query())
        ->addColumn('action', function ($skills) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/skills/").'/'.$skills->id.'/edit">Edit</a>
                        <form action="'.route("skills.destroy", $skills->id).'" method="post">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        <button class="dropdown-item" type="submit" onclick="return confirm(\'Yakin ingin menghapus data?\')">Hapus</button>
                        </form>
                    </div>
                    </div>
                </div>
            ';
        })
        ->addColumn('nomor', $no++)
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
            return redirect('admin/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Tambah Skill | Temuin"
            );
            return view('admin/skills/create')->with($data);
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
        $data = array(
            'title' => "Edit Skill | Temuin",
            'skills' => MasterSkills::find($id),
        );
        return view('admin/skills/edit')->with($data);
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
        $data =  MasterSkills::where('id',$id)->first();
        $data->skill = $request->get('skill');
        $data->status = $request->get('status');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/skills')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/admin/skills')->with('alert', 'Gagal ubah data!');
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
        $data =  MasterSkills::where('id',$id)->first();

        if($data->delete()){
            return redirect('/admin/skills')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/admin/skills')->with('alert', 'Gagal hapus data!');
        }
    }
}
