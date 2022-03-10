<?php

namespace App\Http\Controllers;
use App\Models\Unit; 

use Illuminate\Http\Request;

class UnitsTableController extends Controller
{
      function Unit(){
    	$units=Unit::all();
    	return view('Master_table.Unit',compact('units'));
    }

    function Unit_Store(Request $request){
    		$unit_name	=$request->input('unit_name');
    		$result=Unit::insert(['unit_name'=>$unit_name ]);

	
                        if($result==true){return 1;}
                        else
                         {
                         return 0;
                         }
    }//end store unit  

     //unit edit
    function UnitEdit(Request $request){
    	$unit_id=$request->input('unit_id');
    	$result=json_encode(Unit::where('unit_id','=',$unit_id)->get());
        return  $result;
    }

}//end class
