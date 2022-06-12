<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usr = $request->login;
        $pwd = $request->pwd;
        $hash_pwd = hash('sha512', $pwd);

        $messages = [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ], $messages);

        if ($validator->fails()){
            return redirect('failReCaptcha')
                        ->withErrors($validator)
                        ->withInput();
        }

        $request->validate([
            'login'=>'required',
            'pwd'=>'required'
        ]);

        if ($usr == "Module-ICT133" and $hash_pwd == "69c9ac781e793bcf23f85726c1a11009d6c181007ad17e49273f822b1184e93a4b17d3369d807bdb234d280d98c73ef27aa4304144ba7984e85760d0531a1515"){
            $request->session()->put('Authentifie', time());
            return view('login.success');
        }
        return view('login.failure');

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('login.logout');
    }

    public function secret()
    {
        return view('login.secret');
    }

    public function failure()
    {
        return view('login.failure');
    }

    public function failReCaptcha()
    {
        return view('login.failReCaptcha');
    }

    public function profile()
    {
        $chemin = "../resources/db133.txt";
        $monFichier = fopen($chemin, "r") or die("Unable to open file!");
        $fname = fgets($monFichier);
        $lname = fgets($monFichier);
        $usr = fgets($monFichier);
        $sexe = fgets($monFichier);
        $birthday = fgets($monFichier);
        $email = fgets($monFichier);
        $tel = fgets($monFichier);
        $url = fgets($monFichier);
        $notifMail = fgets($monFichier);
        fclose($monFichier);
        
        return view('login.profile')
                ->with('fname', $fname)
                ->with('lname', $lname)
                ->with('usr', $usr)
                ->with('sexe', $sexe)
                ->with('bithday', $birthday)
                ->with('email', $email)
                ->with('tel', $tel)
                ->with('url', $url)
                ->with('notifMail', $notifMail);
    }

    public function myPrints()
    {
        return view('myPrints');
    }
}

