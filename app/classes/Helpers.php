<?php

namespace App\Classes;

use  Illuminate\Support\Facades\DB;

class Helpers
{

   static function getUsernameById($id)
    {
        $query = "select username from users where id=$id";
        $username =  DB::select($query);

        return $username;
    }
}
