<?php

namespace App\Http\Controllers;
use App\Models\item_category; 
use App\Models\item_type;  
use App\Models\vat_type;
use App\Models\Unit;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
    					$data['product_categories']= item_category::all();
    					$data['product_item_type']= item_type::all();
    					$data['units']= Unit::all();
    					$data['vat_types']= vat_type::all();
    				
    				
   					   return view('pdoduct',$data);
                     } //end index function

    function store(Request $request){

    	
    		$products_name	=$request->input('products_name');
    		$products_item_id	=$request->input('products_item_id');
    		$products_category_id	=$request->input('products_category_id');
    		$products_item_type_id	=$request->input('products_item_type_id');
    		$unit_id	=$request->input('units');
    		$vat_type	=$request->input('vat_type');
    		$product_desc	=$request->input('product_desc');
    		$purchase_price=$request->input('purchase_price');
    		$retail_price=$request->input('retail_price');
    		$product_status=$request->input('product_status');

    		$result=Product::insert(['products_name'=>$products_name,
                           'products_item_id'=>$products_item_id,
                            'products_category_id'=>$products_category_id,
                             'products_item_type_id'=>$products_item_type_id,
                            'unit_id'=>$unit_id,
                            'vat_type_id'=>$vat_type,
                              'product_desc'=>$product_desc,
    		                 'purchase_price'=>$purchase_price,
                            'retail_price'=>$retail_price,
                              'product_status'=>$product_status
                          ]);

	
                        if($result==true){return 1;}
                        else
                         {
                         return 0;
                         }
    	
    	


    } //end store function  

    //product table show function start
    function product_index(){
        $products=Product::with(['Category','Item_Type','Unit','Vat_Type'])->get();
   return view('product_index',compact('products'));
       
    }                 

} //end ProductController class
		
