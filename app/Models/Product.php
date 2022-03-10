<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{  // use HasFactory;
   Protected $table ='products';
   Protected $primarykey ='product_id';
   public $incrementing =true;
   Protected $keyType  = 'int';
   public $timestamps =false;


  public function Category(){
   	return $this->hasOne(item_category::class,'item_cat_id','product_id');
   }
  public function Item_Type(){
   	return $this->hasOne(item_type::class,'item_type_id','product_id');
   }
    public function Unit(){
   	return $this->hasOne(Unit::class,'unit_id','product_id');
   }
    public function Vat_Type(){
      return $this->hasMany(vat_type::class, 'vat_type_id', 'product_id');
 
   }  
   
}// end class
