<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigo extends Model
{
  // SoftDeletes ele não deleta totalmento o registro ele vai sair somente da busca do eloquent
  use SoftDeletes; 
  protected $guarded = ['id'];
  protected $dates = ['delete_at'];
  
}
