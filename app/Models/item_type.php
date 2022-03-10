<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_type extends Model
{
    // use HasFactory;
   Protected $table ='item_types';
   Protected $primarykey ='id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;
}
