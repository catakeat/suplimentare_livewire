<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use  Illuminate\Support\Facades\DB;


class Messages extends Model
{
  use HasFactory;
  protected  $guarded=[];
  public $timestamps = false;

  protected $table = "messages";
  //nefolosit
  /*
  public function getSenderById($id)
  {
    $query = "select username from users where id=$id";
    $username =  DB::select($query);

    return $username;
  }

  public function senderUser(): BelongsTo
  {
      return $this->belongsTo(User::class, 'sender', 'id');
  }
*/
  
/*
  public function destinatar():HasOne
  {
    return $this->hasOne(User::class, 'id', 'destinatar');// clasa , cheie straina , cheie locala
  }*/
  // face acelasi query select * from `users` where `users`.`id` in (0, 3, 4, 7, 8, 9, 12, 15, 16, 21, 24, 33, 38, 40, 41, 42, 45, 71, 77, 82, 88, 92, 103, 104, 105)

public function destinatarUser(): BelongsTo
{
  return $this->belongsTo(User::class,'destinatar','id'); // clasa , cheie locala, cheie straina
}
 
}