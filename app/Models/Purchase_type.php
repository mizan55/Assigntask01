<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_type extends Model
{
   Protected $table ='purchase_type';
   Protected $primarykey ='id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;
}
