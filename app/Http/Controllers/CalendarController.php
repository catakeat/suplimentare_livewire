<?php

namespace App\Http\Controllers;
use App\Classes\Calendar;

use Illuminate\Http\Request;

class CalendarController extends Controller
{


    
    public function index(Request $req){

        $libere = $req->query('libere',null);
        $month = $req->query('month',null);
        $year = $req->query('year',null);
        $calendar = new Calendar($libere,$month, $year);
       // echo $calendar->show();

        return view('pages.calendar',compact('calendar','libere','month','year'));
    }
}
