<?php

namespace App\Http\Controllers;

use App\Models\stock_location; 
use Illuminate\Http\Request;

class StockLocationController extends Controller
{
    function index(){
    	$StockLocations=stock_location::all();
    	return view('Master_table.stock_location',compact('StockLocations'));
    }// end index




    function LocationStore(Request $request){
    	$stock_location_name=$request->input('stock_location_name');
    	$result=stock_location::insert([
    		'stock_location_name'=>$stock_location_name
    	]);
    	if($result==true){
    				return 1;
    	}else{
    				return 0;
    	}

    }
} // end class
