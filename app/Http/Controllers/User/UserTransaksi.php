<?php

namespace App\Http\Controllers\User;

use App\ViewMasterProduk;
use App\Transaksi;
use App\Users;
use DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class UserTransaksi extends Controller
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
        }
        else{
            $data = array(
                'title' => "Transaksi | Temuin",
                'vMasterProduk' => ViewMasterProduk::all(),
            );
            return view('user/transaksi/transaksi')->with($data);
        }
    }

    public function data(Request $request)
    {
        DB::statement(DB::raw('set @rownum=0'));
        $transaksi = Transaksi::join('view_profiles', 'transaksis.id_user', '=', 'view_profiles.id_user')->join('view_master_produk', 'transaksis.uid_produk', '=', 'view_master_produk.id')
                        ->select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'transaksis.id as id_transaksi', 'transaksis.id_user', 'view_profiles.nama_profile', 'transaksis.uid_produk', 'view_master_produk.produk', 'view_master_produk.id_jenis_produk', 'transaksis.harga_transaksi', 'transaksis.diskon_transaksi', 'transaksis.total_transaksi', 'transaksis.status_transaksi', 'transaksis.image_transaksi', 'transaksis.created_at', 'transaksis.updated_at'])
                        ->where('transaksis.id_user', Session::get('id'));
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
                        <a class="dropdown-item" href="'.url("user/transaksi/upload").'/'.$transaksi->id_transaksi.'">Upload Bukti</a>
                        
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
                if($transaksi->image_transaksi == "#"){
                    return '#';
                }
                else{
                    return 
                    '<img data-toggle="modal" data-target="#mediumModal'.$transaksi->id.'" src="'.Storage::url($transaksi->image_transaksi).'">
                    <div class="modal fade" id="mediumModal'.$transaksi->id.'" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Bukti</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-responsive" src="'.Storage::url($transaksi->image_transaksi).'">
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
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
        $user = Users::where('id', Session::get('id'))->first();
        $vMasterProduk = ViewMasterProduk::where('id', $request->get('produk'))->first();
        $data =  new Transaksi();

        $total = ($vMasterProduk->harga_produk-($vMasterProduk->harga_produk*($vMasterProduk->diskon/100)));
        if($vMasterProduk->id_jenis_produk == "1"){
            $data->id_user = Session::get('id');
            $data->uid_produk = $request->get('produk');
            $data->harga_transaksi = $vMasterProduk->harga_produk;
            $data->diskon_transaksi = $vMasterProduk->diskon;
            $data->total_transaksi = $total;
            $data->status_transaksi = "0";
            $data->image_transaksi = "#";

            if($data->save()){
                return redirect('/user/transaksi')->with('alert-success', 'Berhasil menambahkan Transaksi!');
            }
            else{
                return redirect('/user/transaksi')->with('alert', 'Gagal menambahkan Transaksi!');
            }
        }
        else{
            if(($user->saldo-$total) < 0){
                return redirect('/user/transaksi')->with('alert', 'Saldo tidak mencukupi, silahkan isi dompet!');
            }
            else{
                $data->id_user = Session::get('id');
                $data->uid_produk = $request->get('produk');
                $data->harga_transaksi = $vMasterProduk->harga_produk;
                $data->diskon_transaksi = $vMasterProduk->diskon;
                $data->total_transaksi = $total;
                $data->status_transaksi = "1";
                $data->image_transaksi = "#";

                if($data->save()){
                    $data2 = Users::where('id', Session::get('id'))->first();
                    $data2->saldo = $data2->saldo-$total;
                    
                    if($data2->save()){
                        return redirect('/user/transaksi')->with('alert-success', 'Berhasil menambahkan Transaksi!');
                    }
                    else{
                        return redirect('/user/transaksi')->with('alert', 'Gagal menambahkan Transaksi!');
                    }
                }
                else{
                    return redirect('/user/transaksi')->with('alert', 'Gagal menambahkan Transaksi!');
                }
            }
        }
    }

    public function All($id)
    {
        //
        if(!session::get('login')){
            return redirect('user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Semua Transaksi | Temuin",
            );
            return view('user/transaksi/semua')->with($data);
        }
    }

    public function Upload($id)
    {
        //
        if(!session::get('login')){
            return redirect('user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Upload Bukti Transaksi | Temuin",
                'transaksi' => Transaksi::where('id', $id)->first()
            );
            return view('user/transaksi/upload')->with($data);
        }
    }

    public function actUpload(Request $request, $id){
        $uploadedFile = $request->file('file');        
        $path = $uploadedFile->store('public/files/bukti');
        $format = $request->file('file')->getClientOriginalExtension();

        $data = Transaksi::where('id', $id)->first();
        $data->image_transaksi = $path;

        if($format == "jpg" || $format == "JPG" || $format == "PNG" || $format == "png"){
            if($data->save()){
                return redirect('/user/transaksi/all/'.$id)->with('alert-success', 'Berhasil upload bukti Transaksi!');
            }
            else{
                return redirect('/user/transaksi/all/'.$id)->with('alert', 'Gagal upload bukti Transaksi!');
            }
        }
        else{
            return redirect('/user/transaksi/all/'.$id)->with('alert', 'Gagal upload bukti Transaksi, gunakan format jpg atau png!');
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
