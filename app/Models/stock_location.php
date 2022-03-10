<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_location extends Model
{
    // use HasFactory;
   Protected $table ='stock_locations';
   Protected $primarykey ='id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;
}
