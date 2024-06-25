<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MesajeController extends Controller
{
    private $user_id;

    function __construct(Request $request)
    {
        //degeaba , asta se initializeaza inainte de Auth si Session
        // Apply the auth middleware to ensure the user is authenticated
        $this->middleware('auth');

        // Set the user_id after authentication
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::id();
            return $next($request);
        });
    }
    public function primite()
    {

        $mesaje =  Messages::where('destinatar', $this->user_id)->paginate(10);
       return view('pages.mesaje', compact('mesaje'));
      
    }

   public function dataTables(){
        $mesaje =  Messages::where('sender', $this->user_id)->get();
        return view('pages.datatables', compact('mesaje'));
   }

    public function trimise()
    {   
        $mesaje = Messages::where('sender', $this->user_id)->paginate(10);
        return view('pages.mesaje', compact('mesaje'));
        
    }
}
