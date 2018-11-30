<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    //
    public function index(){
        if(!session::get('login')){
            return redirect('auth')->with('alert', 'You are not loged in!');
        }
        else{
            return view('admin/index');
        }
    }

    public function auth(){
        return view('admin/login');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = Admin::where('username', $username);
        if(count($data->get()) > 0){
            $data = $data->first();
            if(Hash::check($password, $data->password)){
                Session::put('id', $data->id);
                Session::put('name', $data->nama);
                Session::put('username', $data->username);
                Session::put('level', $data->level);
                Session::put('login', TRUE);
                return redirect('/admin');
            }
            else{
                return redirect('auth')->with('alert', 'Password salah!');
            }
        }
        else{
            return redirect('auth')->with('alert', 'Username salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('auth')->with('alert', 'Berhasil Logout.');
    }
}
