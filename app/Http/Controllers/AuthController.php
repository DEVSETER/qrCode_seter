<?php

namespace App\Http\Controllers;

use App\Mail\SendToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Jumbojett\OpenIDConnectClient;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    /**
     * Login SSO Form
     */
    public function loginSsoForm(){
        return view('auth.login-sso');
    }

    /**
     * Login SSO
     */
    public function loginSso(){
        $url = "https://seter.trustelem.com/app/2000767";
        $clientID = "trustelem.oidc.gfstqnzxmy";
        $clientSecret = "1Bwo1RrLDfbE7mme2rG4ym5oKeoshRP3";
        $oidc = new OpenIDConnectClient($url, $clientID, $clientSecret);

        $oidc->authenticate();

        $email = $oidc->requestUserInfo('email');

        $user = User::where(['email' => $email])->first();

        if ($user != null){
            Auth::login($user);
            return redirect()->route('dashboard');

        }else {
            Alert::error('ERREUR', "Vous n'avez pas accès à cette plateforme");

            return redirect()->route('auth.loginSsoForm');
        }
    }

    /**
     * Login Test Form
     */
    public function loginForm(){
        return view('auth.test.login');
    }

    /**
     * Login
     */
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where(['email' => $request->email])->first();
        if ($user != null){
            $token = Str::random(20);
            Session::put('token', $token);
            Session::push('userTryingToConnect', $user);

            Mail::to($request->email)->send(new SendToken($token));

            return redirect()->route('auth.verifyTokenForm');

        }else {
            Alert::error('ERREUR', "Vous n'avez pas accès à cette plateforme");

            return redirect()->route('auth.loginForm');
        }

    }


    /**
     * Verify Token Form
     */
    public function verifyTokenForm(){
        if (Session::has('token') && Session::has('userTryingToConnect')){
            return view('auth.test.verify-token');
        }else {
            Alert::error('ERREUR', "Token Expiré");
            return redirect()->route('auth.loginForm')->with('error', "Token expiré");
        }
    }

    /**
     * Verify Token
     */
    public function verifyToken(Request $request){
        $request->validate([
            'token' => 'required',
        ]);

        if (Session::has('token') && Session::has('userTryingToConnect')){
            $token = Session::get('token');
            if ($token == $request->token){
                $user = Session::get('userTryingToConnect')[0];

                Auth::login($user);



                Session::forget('token');
                Session::forget('userTryingToConnect');

                return redirect()->route('dashboard');

            }else {
                Session::forget('token');
                Session::forget('userTryingToConnect');
                Alert::error('ERREUR', "Token non valide");
                return redirect()->route('auth.loginForm')->with('error', "Token non valide");
            }

        }else {
            Alert::error('ERREUR', "Token expiré");
            return redirect()->route('auth.loginForm')->with('error', "Token expiré");
        }
    }


    /**
     * Logout
     */
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.loginSsoForm');
    }

}
