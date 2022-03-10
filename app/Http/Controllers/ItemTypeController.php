<?php

namespace App\Http\Controllers;
use App\Models\item_type; 
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    function index(){
    	$itemTypes=item_type::all();
    	return view('Master_table.itemType',compact('itemTypes'));
    }// end index
    function ItemStore(Request $request){
    		$item_type_name=$request->input('item_type_name');
    		$result=item_type::insert([
    				'item_type_name'=>	$item_type_name

    		]);
    		if($result==true){
	return 1;
}else{
	return 0;
}
    } // function item store end

    function itemTypeEdit(Request $request){
    	$item_type_id=$request->input('item_type_id');
    	$result=json_encode(item_type::where('item_type_id','=',$item_type_id)->get());
    	return $result;
    } //end edit

    function itemTypeUpdate(Request $request){
    	$item_type_name=$request->input('item_type_name');
    	$item_type_id=$request->input('item_type_id');
    	$result=item_type::where('item_type_id','=',$item_type_id)->update([
    			'item_type_name'=>$item_type_name
    	]);

    	if($result==true){
    		return 1;
    	}else{
    		return 0;
    	}
    }
}//end class
