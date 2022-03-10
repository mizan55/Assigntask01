<?php

namespace App\Http\Controllers;
use App\Models\custommer;
use Illuminate\Http\Request;

class CustommerController extends Controller
{
	function customer_index(){
	$custommers=custommer::all();
	return view('Master_table.Customer',compact('custommers'));
                 } //end index

 
function Customer_store(Request $request){
$custommer_name  =$request->input('custommer_name');
$custommer_email  =$request->input('custommer_email');
$custommer_mobile=$request->input('custommer_mobile');
$custommer_Address =$request->input('custommer_Address');	
$result=custommer::insert([
	'custommer_name'=>$custommer_name,
	'custommer_email'=>$custommer_email,
	'custommer_mobile'=>$custommer_mobile,
	'custommer_Address'=>$custommer_Address
]);
if($result==true){
	return 1;
}else{
	return 0;
}

 } //end store    


 function Customer_Edit(Request $request){
 			$Customer_id=$request->input('Customer_id');
 			$result=json_encode(custommer::where('custommer_id','=',$Customer_id)->get());
 			 return  $result;
 }  //end edit
function Customer_Update(Request $request){
$custommer_id  =$request->input('custommer_id');
$custommer_name  =$request->input('custommer_name');

$custommer_email  =$request->input('custommer_email');
$custommer_mobile=$request->input('custommer_mobile');
$custommer_Address=$request->input('custommer_Address');
	
$result=custommer::where('custommer_id','=',$custommer_id)->update([
	'custommer_name'=>$custommer_name,
	'custommer_email'=>$custommer_email,
	'custommer_mobile'=>$custommer_mobile,
	'custommer_Address'=>$custommer_Address
]);
if($result==true){
	return 1;
}else{
	return 0;
}


  }         


} //class
