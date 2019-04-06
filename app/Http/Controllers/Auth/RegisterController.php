<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],
        [
            'email.required' => 'Harap masukkan email address anda',
            'email.email' => 'Format email tidak sesuai',
            'email.unique:users' => 'Email sudah digunakan sebelumnya',
            'password.required' => 'Harap masukkan password',
            'password.min' => 'Minimal karakter password terdiri dari 6 digit',
            'password.confirmed' => 'Kombinasi password dan password konfirmasi tidak sama',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => 4,
            'is_active' => 1,
            'verification_token' => Str::random(40),
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));

        return $user;
    }


    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'Kami telah mengirim aktivasi kode. Silakan cek email untuk verifikasi email.');
    }


    public function verifyUser($token)
    {
        $verifyUser = User::where('verification_token', $token)->first();
        if(isset($verifyUser)){
            $user = $verifyUser;
            if(!$user->verified) {
                $user->verified = 1;
                $user->verification_token = null;
                $user->save();
                $status = "Email anda sudah terverifikasi. Anda sekarang bisa login.";
            }else{
                $status = "Email anda sudah terverifikasi. Anda sekarang bisa login.";
            }
        }else{
            return redirect('/login')->with('warning', "Maaf email anda tidak diketahui.");
        }

        return redirect('/login')->with('status', $status);
    }

}
