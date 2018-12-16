<?php

namespace App\Http\Controllers\User;

use App\Users;
use App\Profile;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    //
    public function index(){
        if(!session::get('login')){
            return redirect('user/auth')->with('alert', 'You are not loged in!');
        }
        else{
            $data = array(
                'title' => "Dashboard | Temuin",
            );
            return view('user/index')->with($data);
        }
    }

    public function auth(){
        return view('user/login');
    }

    public function actLogin(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = Users::where('username', $username)->where('is_verification', "1");
        if(count($data->get()) > 0){
            $data = $data->first();
            if(Hash::check($password, $data->password)){
                Session::put('id', $data->id);
                Session::put('email', $data->email);
                Session::put('username', $data->username);
                Session::put('is_verification', $data->is_verification);
                Session::put('login', TRUE);
                return redirect('/user');
            }
            else{
                return redirect('user/auth')->with('alert', 'Password salah!');
            }
        }
        else{
            return redirect('user/auth')->with('alert', 'Username salah atau akun belum diverifikasi!');
        }
    }

    public function register(){
        return view('user/register');
    }

    public function actRegister(Request $request){
        $username = explode('@', $request->get('email'));
        $data =  new Users();
        $data->email = $request->get('email');
        $data->username = $username[0];
        $data->password = Hash::make($request->get('password'));
        $data->is_verification = "0";

        if($data->save()){
            $data2 = new Profile();
            $data2->id_user = $data->id;
            $data2->nama_profile = $request->get('nama');
            $data2->tempat_lhr_profile = "";
            $data2->tgl_lhr_profile = date('d-m-y H:i:s');
            $data2->tlp_profile = "";
            $data2->uid_work = "1";
            $data2->alamat = "";
            if($data2->save()){
                Mail::send('user/email', ['id' => $data->id, 'nama' => $request->get('nama')], function ($message) use ($request)
                {
                    $message->subject('Verifikasi Akun Temuin');
                    $message->from('donotreply@temuin.com', 'Temuin');
                    $message->to($request->get('email'));
                });
                return redirect('/user/register')->with('alert-success','Berhasil daftar. Silahkan cek email untuk verifikasi.');
            }
            else{
                return redirect('/user/register')->with('alert', 'Gagal');
            }
        }
        else{
            return redirect('/user/register')->with('alert', 'Gagal');
        }
    }

    public function verifikasi($id){
        $data =  Users::where('id',$id)->first();
        $data->is_verification = "1";

        if($data->save()){
            return redirect('/user/auth')->with('alert-success', 'Berhasil verifikasi, silahkan login.');
        }
        else{
            return redirect('/user/auth')->with('alert', 'Gagal verifikasi');
        }
    }

    public function emailVerifikasi(){
        return view('user/email_verifikasi');
    }

    public function sendEmail(Request $request){
        $data = Users::where('email', $request->get('email'))->where('is_verification', '0');
        if(count($data->get()) > 0){
            $data = $data->first();
            Mail::send('user/email', ['id' => $data->id, 'nama' => $data->username], function ($message) use ($request)
            {
                $message->subject('Verifikasi Akun Temuin');
                $message->from('donotreply@temuin.com', 'Temuin');
                $message->to($request->get('email'));
            });
            return redirect('/user/emailverifikasi')->with('alert-success','Silahkan cek email untuk verifikasi.');
        }
        else{
            return redirect('/user/emailverifikasi')->with('alert', 'Email belum terdaftar. Atau akun sudah diverifikasi.');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('user/auth')->with('alert', 'Berhasil Logout.');
    }
}
