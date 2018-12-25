<?php

namespace App\Http\Controllers\Admin;

use App\Transaksi;
use App\Users;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class TransaksiController extends Controller
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
                'title' => "Transaksi | Temuin"
            );
            return view('admin/transaksi/transaksi')->with($data);
        }
    }

    public function data(Request $request)
    {
        DB::statement(DB::raw('set @rownum=0'));
        $transaksi = Transaksi::join('view_profiles', 'transaksis.id_user', '=', 'view_profiles.id_user')->join('view_master_produk', 'transaksis.uid_produk', '=', 'view_master_produk.id')
                        ->select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'transaksis.id as id_transaksi', 'transaksis.id_user', 'view_profiles.nama_profile', 'transaksis.uid_produk', 'view_master_produk.produk', 'view_master_produk.id_jenis_produk', 'transaksis.harga_transaksi', 'transaksis.diskon_transaksi', 'transaksis.total_transaksi', 'transaksis.status_transaksi', 'transaksis.image_transaksi', 'transaksis.created_at', 'transaksis.updated_at']);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }
        return Datatables::of($transaksi)
        ->addColumn('action', function ($transaksi) {
            return '
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Aksi</button>
                
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="'.url("admin/transaksi/").'/'.$transaksi->id_transaksi.'/edit">Edit</a>
                        <form action="'.route("transaksi.destroy", $transaksi->id_transaksi).'" method="post">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        <button class="dropdown-item" type="submit" onclick="return confirm(\'Yakin ingin menghapus data?\')">Hapus</button>
                        </form>
                    </div>
                    </div>
                </div>
            ';
        })
        ->addColumn('stat', function($transaksi){
            if($transaksi->status_transaksi=="1"){
                return "True";
            }
            else{
                return "False";
            }
        })
        ->addColumn('bukti', function($transaksi){
            if($transaksi->id_jenis_produk=="1"){
                return '<img src="'.$transaksi->image_transaksi.'">';
            }
            else{
                return "#";
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
            return redirect('/admin/transaksi')->with('alert-success', 'Berhasil menambahkan data!');
        }
        else{
            return redirect('/admin/transaksi')->with('alert', 'Gagal menambahkan data!');
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
            'title' => "Edit Transaksi | Temuin",
            'transaksi' => Transaksi::find($id),
        );
        return view('admin/transaksi/edit')->with($data);
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
        $data = Transaksi::where('id',$id)->first();
        $data->status_transaksi = $request->get('status');

        if($data->save()){
            $join = Transaksi::select('transaksis.id', 'view_master_produk.harga_produk', 'view_master_produk.id_jenis_produk')
                                ->join('view_master_produk', 'transaksis.uid_produk', '=', 'view_master_produk.id')
                                ->where('transaksis.id_user', '=', $data->id_user)->first();
            $data2 = Users::where('id', $data->id_user)->first();

            if($request->get('status') == "1"){
                $data2->saldo = $data2->saldo+$join->harga_produk;
            }
            else{
                $data2->saldo = $data2->saldo-$join->harga_produk;
            }

            if($data2->save()){
                return redirect('/admin/transaksi')->with('alert-success', 'Berhasil ubah data!');
            }
            else{
                return redirect('/admin/transaksi')->with('alert', 'Gagal ubah data saldo!');
            }
        }
        else{
            return redirect('/admin/transaksi')->with('alert', 'Gagal ubah data!');
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
        $data =  Transaksi::where('id',$id)->first();

        if($data->delete()){
            return redirect('/admin/transaksi')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/admin/transaksi')->with('alert', 'Gagal hapus data!');
        }
    }
}
