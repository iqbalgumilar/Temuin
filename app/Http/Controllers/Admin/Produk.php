<?php

namespace App\Http\Controllers\Admin;

use App\MasterJenisProduk;
use App\MasterProduk;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class Produk extends Controller
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
                'title' => "Produk | Temuin"
            );
            return view('admin/produk/produk')->with($data);
        }
    }

    public function data(Request $request)
    {
        DB::statement(DB::raw('set @rownum=0'));
        $produk = MasterProduk::join('master_jenis_produks', 'master_produks.id_jenis_produk', '=', 'master_jenis_produks.id')
                    ->select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'master_produks.id', 'master_produks.id_jenis_produk', 'master_jenis_produks.jenis_produk', 'master_produks.produk', 'master_produks.file_produk', 'master_produks.status', 'master_produks.harga_produk', 'master_produks.created_at', 'master_produks.updated_at']);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }
        return Datatables::of($produk)
        ->addColumn('action', function ($produk) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/Produk/").'/'.$produk->id.'/edit">Edit</a>
                        <form action="'.route("Produk.destroy", $produk->id).'" method="post">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        <button class="dropdown-item" type="submit" onclick="return confirm(\'Yakin ingin menghapus data?\')">Hapus</button>
                        </form>
                    </div>
                    </div>
                </div>
            ';
        })
        ->addColumn('stat', function($produk){
            if($produk->status=="1"){
                return "True";
            }
            else{
                return "False";
            }
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
            return redirect('admin/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Tambah Produk | Temuin",
                'jenis_produk' => MasterJenisProduk::all(),
            );
            return view('admin/produk/create')->with($data);
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
        $data =  new MasterProduk();
        $data->id_jenis_produk = $request->get('id_jenis_produk');
        $data->produk = $request->get('produk');
        $data->file_produk = $request->get('file_produk');
        $data->status = $request->get('status');
        $data->harga_produk = $request->get('harga_produk');
        $data->created_by = Session::get('id');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/Produk')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/admin/Produk')->with('alert', 'Gagal menambahkan data!');
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
            'title' => "Edit Produk | Temuin",
            'produk' => MasterProduk::find($id),
            'jenis_produk' => MasterJenisProduk::all(),
        );
        return view('admin/produk/edit')->with($data);
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
        $data =  MasterProduk::where('id',$id)->first();
        $data->id_jenis_produk = $request->get('id_jenis_produk');
        $data->produk = $request->get('produk');
        $data->file_produk = $request->get('file_produk');
        $data->status = $request->get('status');
        $data->harga_produk = $request->get('harga_produk');
        $data->updated_by = Session::get('id');

        if($data->save()){
            return redirect('/admin/Produk')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/admin/Produk')->with('alert', 'Gagal ubah data!');
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
        $data =  MasterProduk::where('id',$id)->first();

        if($data->delete()){
            return redirect('/admin/Produk')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/admin/Produk')->with('alert', 'Gagal hapus data!');
        }
    }
}
