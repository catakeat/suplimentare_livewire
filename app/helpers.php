<?php
namespace App;
use Illuminate\Support\Facades\DB;


function getUsernameById($id){
   $query="select username from users where id=$id";
     $username =  DB::select($query);
   
     return $username;
}



function test(){
    return "test";
}