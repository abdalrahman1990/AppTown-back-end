<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Verification;
use App\Mail\VerificationMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Rules\Captcha;

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


    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response' => new Captcha(),
        ]);
    }


    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $verify = Verification::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerificationMail($user));

        return $user;
    }


    public function verification($token){
        $verify = Verification::where('token', $token)->first();
        if(isset($verify)){
            $user = $verify->user;
            if(!$user->verified){
                $verify->user->verified = 1;
                $verify->user->save();
                $status = "Your email is verified, you can login right now";
            } else{
                $status = "Your email is already verified, you can login right now";
            }
        } else{
            return redirect('/login')->with('warning', 'Sorry your email cannot identified');
        }
        return redirect('/login')->with('success', $status);
    }
    protected function registered(Request $request, $user){
        $this->guard()->logout();
        return redirect('/login')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
