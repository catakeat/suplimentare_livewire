<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entitati extends Model
{
    protected $table = 'entitati';
    use HasFactory;

    public function users():HasMany
    {
      return  $this->hasMany(User::class,'entitate');    // $this->hasMany(User::class,'entitate','id')  ->id este redundant pt ca face : 
                                                           // select from users where `users`.`entitate`  in (.......) 
    }
}
