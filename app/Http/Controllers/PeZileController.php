<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeZileController extends Controller
{
  

  function index(Request $req)
  {
    $current_date = $req->input('current_date');
    
    $query = "SELECT * FROM `messages` as m join users as u on m.destinatar=u.id WHERE  data='$current_date'";
    $users = DB::select($query);

    
    return view('pages.pezile', compact('users'));
  }
}
