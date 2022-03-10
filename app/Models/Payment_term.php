<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_term extends Model
{
   Protected $table ='payment_term';
   Protected $primarykey ='id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;
}
