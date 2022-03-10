<?php

namespace App\Http\Controllers;
use App\Models\item_category; 

use Illuminate\Http\Request;

class MasterTableController extends Controller
{
	//Category Master Table start
    // function CategoryIndex(){
    // 	return view('Master_table.CategoryAdd');
    // }

    function category_store(Request $request){
    		$item_cat_name	=$request->input('item_cat_name');
    		$result=item_category::insert(['item_cat_name'=>$item_cat_name ]);

	
                        if($result==true){return 1;}
                        else
                         {
                         return 0;
                         }
    }//end insert category

    //category show in table
    function Category(){
    	$categories=item_category::all();
    	return view('Master_table.Category_index',compact('categories'));
    }

   //End Category Master Table start

    //category edit
    function CategoryEdit(Request $request){
    	$item_cat_id=$request->input('item_cat_id');
    	$result=json_encode(item_category::where('item_cat_id','=',$item_cat_id)->get());
        return  $result;
    }
    //category update
    function CategoryUpdate(Request $request){
    			$item_cat_id=$request->input('item_cat_id');
    			$item_cat_name=$request->input('item_cat_name');
    			$result=item_category::where('item_cat_id','=',$item_cat_id)->update(['item_cat_name'=>$item_cat_name]);
    			if($result==1){
    				return 1;
    			}else{
    				return 0;
    			}
    }
}
