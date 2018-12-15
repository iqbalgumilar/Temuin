<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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
                'title' => 'Admin | Temuin'
            );
            return view('admin/admin/admin')->with($data);
        }
    }

    public function data()
    {
        $admin = Admin::select(['id', 'name', 'username', 'password', 'level', 'created_at', 'updated_at']);
        $no = 1;
        return Datatables::of(Admin::query())
        ->addColumn('action', function ($admin) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/admin/").'/'.$admin->id.'/edit">Edit</a>
                        <form action="'.route("admin.destroy", $admin->id).'" method="post">
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
                'title' => 'Tambah Admin | Temuin'
            );
            return view('admin/admin/create')->with($data);
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
        $data =  new Admin();
        $data->name = $request->get('name');
        $data->username = $request->get('username');
        $data->password = Hash::make($request->get('password'));
        $data->level = $request->get('level');

        if($data->save()){
            return redirect('/admin/admin')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/admin/admin')->with('alert', 'Gagal menambahkan data!');
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
            'title' => 'Edit Admin | Temuin',
            'data' => Admin::find($id),
        );
        return view('admin/admin/edit')->with($data);
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
        $data =  Admin::where('id',$id)->first();

        if(!empty($request->get('password'))){
            $data->name = $request->get('name');
            $data->username = $request->get('username');
            $data->password = Hash::make($request->get('password'));
            $data->level = $request->get('level');
        }
        else{
            $data->name = $request->get('name');
            $data->username = $request->get('username');
            $data->level = $request->get('level');
        }

        if($data->save()){
            return redirect('/admin/admin')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/admin/admin')->with('alert', 'Gagal ubah data!');
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
        $data =  Admin::where('id',$id)->first();

        if($data->delete()){
            return redirect('/admin/admin')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/admin/admin')->with('alert', 'Gagal hapus data!');
        }
    }
}
