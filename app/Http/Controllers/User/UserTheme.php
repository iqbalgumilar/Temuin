<?php

namespace App\Http\Controllers\User;

use App\ViewProfiles;
use App\Transaksi;
use App\Themes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserTheme extends Controller
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
            $profile = ViewProfiles::where('id_user', Session::get('id'))->first();
            $transaksi = Transaksi::select('transaksis.id as id_transaksi', 'transaksis.id_user', 'transaksis.uid_produk', 'view_master_produk.produk', 'view_master_produk.id_jenis_produk', 'transaksis.harga_transaksi', 'transaksis.diskon_transaksi', 'transaksis.total_transaksi', 'transaksis.status_transaksi', 'transaksis.image_transaksi', 'transaksis.created_at', 'transaksis.updated_at')
                                    ->join('view_master_produk', 'transaksis.uid_produk', '=', 'view_master_produk.id')
                                    ->where('id_user', Session::get('id'))
                                    ->where('status_transaksi', "1")->get();
            if($transaksi == NULL){
                return redirect('/user/auth')->with('alert', 'Tema kosong, silahkan beli!');
            }
            else{
                $data = array(
                    'title' => 'Themes | Temuin',
                    'theme' => Themes::where('id_profile', $profile->id)->first(),
                    'transaksi' => $transaksi,
                    'profile' => $profile,
                );
                return view('user/theme/theme')->with($data);
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
                'title' => 'Profile - Create | Temuin'
            );
            $works = MasterWorks::all();      
            return view('user/profile/create',compact('works'))->with($datas);
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
        $theme = Themes::where('id_profile', $request->get('id_profile'))->get();
        if(empty($request->get('id_theme'))){
            $data = new Themes();
            $data->id_profile = $request->get('id_profile');
            $data->uid_pb = $request->get('uid_pb');
            $data->uid_cv = $request->get('uid_cv');
            $data->uid_kn = $request->get('uid_kn');
    
            if($data->save()){
                return redirect('/user/profile')->with('alert-success', 'Berhasil menerapkan tema!');
            }
            else{
                return redirect('/user/profile')->with('alert', 'Gagal menerapkan tema!');
            }
        }
        else{
            $data = Themes::where('id', $request->get('id_theme'))->first();
            $data->id_profile = $request->get('id_profile');
            $data->uid_pb = $request->get('uid_pb');
            $data->uid_cv = $request->get('uid_cv');
            $data->uid_kn = $request->get('uid_kn');
    
            if($data->save()){
                return redirect('/user/theme')->with('alert-success', 'Berhasil menerapkan tema!');
            }
            else{
                return redirect('/user/theme')->with('alert', 'Gagal menerapkan tema!');
            }
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
                'title' => 'Profile - Edit | Temuin'
            );
        $works = MasterWorks::all();
        $data = Profile::where('id_user', Session::get('id'))->first();
        return view('user/profile/edit', compact('data','works'))->with($datas);
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
        $request->validate([
            'name' => 'required',
            'tempatlhr' => 'required',
            'datelhr' => 'required',
            'tlp' => 'required',
            'uid_work' => 'required',
            'alamat' => 'required',
        ]);
        
        $data = Profile::where('id_user', $id)->first();

        $data->nama_profile = $request->get('name');
        $data->tempat_lhr_profile = $request->get('tempatlhr');
        $data->tgl_lhr_profile = $request->get('datelhr');
        $data->tlp_profile = $request->get('tlp');
        $data->uid_work = $request->get('uid_work');
        $data->alamat = $request->get('alamat');

        if($data->save()){
            return redirect('/user/profile')->with('alert-success', 'Berhasil ubah data!');
        }
        else{
            return redirect('/user/profile')->with('alert', 'Gagal ubah data!');
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
        $data = Profile::where('id_user', $id)->first();
        if($data != null){
            $data->delete();
            return redirect('/user/profile')->with('alert-success', 'Berhasil hapus data!');
        }
        else{
            return redirect('/user/profile')->with('alert', 'Gagal hapus data!');
        }
    }
}
