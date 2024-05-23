<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;



class MesajeController extends Controller
{
    private $user_id = '92';//hardcodat

    public function primite(){
      
        $mesaje =  Messages::with('senderUser','destinatarUser')->where('destinatar', $this->user_id)->paginate(10);
        return view('pages.mesaje',compact('mesaje'));

    }
    public function trimise(){
        $mesaje = messages::with('senderUser','destinatarUser')->where('sender', $this->user_id)->paginate(10);
        return view('pages.mesaje',compact('mesaje'));
    }
}
/*

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MesajeController extends Controller
{
    private $user_id = '92';//hardcodat

    public function primite(){
        $mesaje =  Messages::with(['senderUser'=>function ($query) {
            $query->withDefault(['username' => 'DefaultSenderName']);
        },'destinatarUser'=>function ($query) {
            $query->withDefault(['username' => 'DefaultDestinatarName']);
        }])->where('destinatar', $this->user_id)->get();
        return view('pages.mesaje',compact('mesaje'));

    }
    public function trimise(){
        $mesaje = messages::with('senderUser','destinatarUser')->where('sender', $this->user_id)->get();
        return view('pages.mesaje',compact('mesaje'));
    }
}



*/