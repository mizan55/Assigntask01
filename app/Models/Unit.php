<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    // use HasFactory;
    Protected $table ='units';
   Protected $primarykey ='id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;
}
