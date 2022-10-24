<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function registrationForm() {
        if(auth()->check()) {
            return redirect()->route('dashboard');
        }
        return view('pages.register');
    }

    public function loginForm() {
        if(auth()->check()) {
            return redirect()->route('dashboard');
        }
        return view('pages.login');
    }

    public function register(Request $request) {
        $request->validate([
            'name'                  => 'required|string',
            'sex'                   => 'required|string',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|string|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|string|min:6',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name'          => $request->name,
            'sex'           => $request->sex,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'remember_token'=> $token,
        ]);

        Mail::send('mail.verification-email', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
        });

        return redirect()->route('login')->with('Message', 'Your account has been created. Please check your email for the verification.');
    }

    public function login(Request $request) {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string',

        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return redirect()->route('login')->with('Error', 'Email doesn\'t exist.');
        }

        if(!$user || $user->email_verified_at==null) {
            return redirect()->route('login')->with('Error', 'Sorry, you are not yet verified.')->withInput($request->all());
        }

        $login = auth()->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        if(!$login) {
            return back()->with('Error', 'Invalid credentials.')->withInput($request->all());
        }

        return redirect()->route('dashboard');
    }

    public function verification(User $user, $token) {
        if($user->remember_token!==$token) {
            return redirect()->route('login')->with('Error', 'The token is invalid.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('login')->with('Message', 'Your account has been verified.');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect()->route('login')->with('Message', 'Logged out successfully.');
    }
}
