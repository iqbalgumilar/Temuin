<?php

namespace App\Http\Controllers\User;

use App\Themes;
use App\MasterProduk;
use App\Profiles;
use App\Users;
use App\ViewProfiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Generate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pb($username){
        $user = Users::where('username', $username)->first();
        $vProfile = ViewProfiles::where('id_user', $user->id)->first();
        $theme = Themes::where('id_profile', $vProfile->id)->first();
        $mProduk = MasterProduk::where('id', $theme->uid_pb)->first();

        $data = array(
            'profile' => $vProfile,
        );
        return view($mProduk->file_produk)->with($data);
    }

    public function cv($username){
        $user = Users::where('username', $username)->first();
        $vProfile = ViewProfiles::where('id_user', $user->id)->first();
        $theme = Themes::where('id_profile', $vProfile->id)->first();
        $mProduk = MasterProduk::where('id', $theme->uid_cv)->first();

        $data = array(
            'profile' => $vProfile,
        );
        return view($mProduk->file_produk)->with($data);
    }

    public function idCard($username){
        $user = Users::where('username', $username)->first();
        $vProfile = ViewProfiles::where('id_user', $user->id)->first();
        $theme = Themes::where('id_profile', $vProfile->id)->first();
        $mProduk = MasterProduk::where('id', $theme->uid_cv)->first();

        $data = array(
            'profile' => $vProfile,
        );
        return view($mProduk->file_produk)->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
