<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function userLogout(){
        //dd(session()->get("user"));
        session()->flush();
        return redirect('login');

    }
}
