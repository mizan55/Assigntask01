<?php

namespace App\Http\Controllers;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierTableController extends Controller
{

function Supplier_index(){
	$suppliers=supplier::all();
	return view('Master_table.Supplier',compact('suppliers'));
                 } //end index

 
 function supplier_store(Request $request){
$supplier_name =$request->input('supplier_name');
$supplier_email =$request->input('supplier_email');
$supplier_mobile=$request->input('supplier_mobile');
$supplier_Address =$request->input('supplier_address');	
$result=supplier::insert([
	'supplier_name'=>$supplier_name,
	'supplier_email'=>$supplier_email,
	'supplier_mobile'=>$supplier_mobile,
	'supplier_Address'=>$supplier_Address
]);
if($result==true){
	return 1;
}else{
	return 0;
}

 } //end store    


 function supplier_edit(Request $request){
 			$supplier_id=$request->input('supplier_id');
 			$result=json_encode(supplier::where('supplier_id','=',$supplier_id)->get());
 			 return  $result;
 }  //end edit
  function supplier_update(Request $request){
$supplier_id=$request->input('supplier_id');
$supplier_name =$request->input('supplier_name');
$supplier_email =$request->input('supplier_email');
$supplier_mobile=$request->input('supplier_mobile');
$supplier_Address =$request->input('supplier_address');	
$result=supplier::where('supplier_id','=',$supplier_id)->update([
	'supplier_name'=>$supplier_name,
	'supplier_email'=>$supplier_email,
	'supplier_mobile'=>$supplier_mobile,
	'supplier_Address'=>$supplier_Address
]);
if($result==true){
	return 1;
}else{
	return 0;
}


  }         

   
} //end class
