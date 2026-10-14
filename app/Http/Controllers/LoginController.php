<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    // autenticação de login
    public function authenticate()
    {
        $GET = request()->all();
        $POST = request()->post();

        $user = $POST['iUser'];
        $password = $POST['iPass'];

        dd($user, $password);
    }
}
