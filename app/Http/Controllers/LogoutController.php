<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function userLogout(){
        //dd(session());
        return view('pages.logout');
    }
}
