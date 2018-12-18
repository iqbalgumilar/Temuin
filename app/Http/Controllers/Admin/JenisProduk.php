<?php

namespace App\Http\Controllers\Admin;

use App\MasterJenisProduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class JenisProduk extends Controller
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
                'title' => "Jenis Produk | Temuin"
            );
            return view('admin/jenis_produk/jenis_produk')->with($data);
        }
    }

    public function data()
    {
        $jenis_produk = MasterJenisProduk::select(['id', 'jenis_produk', 'status', 'created_at', 'updated_at']);
        $no = 1;
        return Datatables::of(MasterJenisProduk::query())
        ->addColumn('action', function ($jenis_produk) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/JenisProduk/").'/'.$jenis_produk->id.'/edit">Edit</a>
                        <form action="'.route("JenisProduk.destroy", $jenis_produk->id).'" method="post">
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
                'title' => "Tambah Jenis Produk | Temuin"
            );
            return view('admin/jenis_produk/create')->with($data);
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
        $data =  new MasterJenisProduk();
        $data->jenis_produk = $request->get('jenis_produk');
        $data->status = $request->get('status');
        $data->created_by = Session::get('id');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/JenisProduk')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/admin/JenisProduk')->with('alert', 'Gagal menambahkan data!');
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
            'title' => "Edit Jenis Produk | Temuin",
            'jenis_produk' => MasterJenisProduk::find($id),
        );
        return view('admin/jenis_produk/edit')->with($data);
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
        $data =  MasterJenisProduk::where('id',$id)->first();
        $data->jenis_produk = $request->get('jenis_produk');
        $data->status = $request->get('status');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/JenisProduk')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/admin/JenisProduk')->with('alert', 'Gagal ubah data!');
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
        $data =  MasterJenisProduk::where('id',$id)->first();

        if($data->delete()){
            return redirect('/admin/JenisProduk')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/admin/JenisProduk')->with('alert', 'Gagal hapus data!');
        }
    }
}
