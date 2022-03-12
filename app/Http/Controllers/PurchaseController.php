<?php

namespace App\Http\Controllers;
use App\Models\supplier; 
use Illuminate\Http\Request;

use App\Models\stock_location;
 use App\Models\Payment_term;
 use App\Models\Product;
use App\Models\Purchase_type;
use PDF;
class PurchaseController extends Controller
{
    function index(){
        $data['suppliers']=supplier::all();
        $data['stock_locations']=stock_location::all();
        $data['payment_terms']=Payment_term::all();
        $data['products']=Product::all();
        $data['purchase_types']=Purchase_type::all();
        return view('purchase.purchase',$data);
    }


    function Getpurchaseinformation(Request $request){
      $product_id = $request->input('product_id');
      $product =json_encode(Product::where('product_id','=', $product_id)->with('Vat_Type')->get(['products_name','purchase_price','product_id']));
      return    $product;
    }


    function ppdf(Request $request){
                $supplier=$request->input('supplier_name');
                $grandtotal=$request->input('grandtotal');

                

                $data['h']='mizan';
        $pdf = PDF::loadView('purchase.purchaseinformation', $data);
        return $pdf->stream('document.pdf');
                }

} //end class


