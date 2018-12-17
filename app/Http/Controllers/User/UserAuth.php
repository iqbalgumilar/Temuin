<?php

namespace App\Http\Controllers\User;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    //
    public function index(){
        if(!session::get('login')){
            return redirect('authUser')->with('alert', 'You are not loged in!');
        }
        else{
            return view('user/index');
        }
    }

    public function authUser(){
        return view('user/login');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = Users::where('username', $username);
        if(count($data->get()) > 0){
            $data = $data->first();
            if(Hash::check($password, $data->password)){
                Session::put('id', $data->id);
                Session::put('email', $data->email);
                Session::put('username', $data->username);
                Session::put('login', TRUE);
                return redirect('/user');
            }
            else{
                return redirect('authUser')->with('alert', 'Password salah!');
            }
        }
        else{
            return redirect('authUser')->with('alert', 'Username salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('authUser')->with('alert', 'Berhasil Logout.');
    }

    public function registerAuth(Request $request){
        return view('user/register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new Users();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('authUser')->with('alert-success','Kamu berhasil Register');
}
}