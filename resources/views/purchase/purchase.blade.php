@extends('layout.app')
@section('content')
<div class="container mt-5">
<div class="card"  style="width:700px" >
  <div class="card-header">Purchase</div>
  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-4"><span style="color:red">*</span> supplier :</div>
						<div class="col-sm-8">
								<select name="supplier" id="supplier">
									<option value="">select supplier</option>
									@foreach($suppliers as $supplier)
									<option value="{{$supplier->supplier_id}}">{{$supplier->supplier_name}}</option>
									@endforeach
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->

		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-4"><span style="color:red">*</span> Referance</div>
						<div class="col-sm-8 input-group" style="width:120">
							<span class="input-group-text">PO</span>
							<input type="text" class="form-controll">
								
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
  </div> <!--end row-->

  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-4"><span style="color:red">*</span> Location :</div>
						<div class="col-sm-8">
								<select name="" id="">
									<option value="">select supplier</option>
									@foreach($stock_locations as $stock_location)
									<option value="{{$stock_location->stock_location_id}}">{{$stock_location->stock_location_name}}</option>
									@endforeach
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->

		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-4"><span style="color:red">*</span> Date</div>
						<div class="col-sm-8">
							<div class="input-group date" id="datepicker">
										<input type="text" class="form-control">
										<span class="input-group-append">
										<span class="input-group-text bg-white d-block">
										<i class="fa fa-calendar"></i>
										</span>
										</span>
    						</div>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
  </div> <!--end row-->

  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-5"><span style="color:red">*</span> Payment Term :</div>
						<div class="col-sm-7">
								<select name="" id="">

									<option value="">select payment term</option>
										@foreach($payment_terms as $payment_term)
									<option value="{{$payment_term->payment_id}}">{{$payment_term->payment_name}}</option>
									@endforeach
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-5"><span style="color:red">*</span> Purchase Type :</div>
						<div class="col-sm-7">
								<select name="" id="">
									<option value="">select supplier</option>
									@foreach($purchase_types as $purchase_type)
									<option value="{{$purchase_type->purchase_type_id}}">{{$purchase_type->purchase_type_name}}</option>
									@endforeach
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
  </div> <!--end row-->
<hr>
  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-5"><span style="color:red">*</span>Select Item</div>
						<div class="col-sm-7">
							
								<select name="productSelect" id="productSelect">
									<option value="">select product</option>
									@foreach($products as $product)
									<option value="{{$product->product_id}}">{{$product->products_name}}</option>
									@endforeach
								</select>
							



						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
 <div class="col-sm-6 ps-5">		<button type="button" class="btn btn-success btn-sm " id="add_product">add</button></div>
	
  </div> <!--end row-->
  <hr>
  <div class="row" >
 <table class='table table-hover'>
				                <thead >
				                <tr>
				                <th>Product</th>
				                <th>Price (Tk.)</th>
				                <th>Quantity</th>

				                <th>VAT (%)</th>
				                <th>Amount (Tk.)</th>
				                <th>Action</th>

				                </tr>
				                </thead >
								<tbody id="proct_tk_quantity">

								</tbody>
							
				               </table>

  
  </div>
  <hr>
  <div class="row">
  	<div class="col-sm-6">
  				<td>discount</td>
        <td><input type="number" name="discount" id="discount" value="0"></td>
  	</div>
  	<div class="col-sm-6">
  		<table class="table">
    
    <tbody>
      <tr>
        <td>total</td>
        <td>=</td>
        <td id="total"></td>
      </tr>
      <tr>
     <td>vat</td>
        <td>=</td>
        <td id="totalvat"></td>
      </tr>
       <tr>
	        <td>discount</td>
	        <td>=</td>
	        <td id="cdiscount"></td>
      </tr>

      <tr>
        <td >grand total</td>
        <td>=</td>
        <td id="grandtotal"></td>
      </tr>
    </tbody>
  </table>
  <button type='button' class='btn btn-danger btn-sm' id='submit_btn'>Save</button>
  		
  	</div>
  </div>



  <div class="card-footer"></div>
</div>
	
</div>

@endsection
@section('script')
<script type = "text/javascript" >

$(document).ready(function(){
	//Add button Click Event
	 var i = 0;
		$('#add_product').click(function(){
								var supplierval=$('#supplier').val();
				   			var isValid=true;
				   			if(supplierval>0){
				   				var product_id = parseInt($('#productSelect').val());
			    		    $("#productSelect option:selected").attr('disabled','disabled');
			    		    axios.post('/pproduct', {
							            product_id: product_id
							        }).then(function(response) {

							            var jsonData = response.data;
							              i++; 
							            $('<tr id="tr'+i+'">').html(

							                 // "<td id='id' >" + jsonData[0].product_id + "</td>" +
							                "<td id='name'>" + jsonData[0].products_name + "</td>" +
							                "<td class='purchase_price' id='"+i+"'>" + jsonData[0].purchase_price + "</td>" +
							                "<td><input type='text' class='Quantity' id='"+i+"'  value='1' style='width:50px; text-align:center'> </td>" +
							                "<td><input type='text' id='vat'  style='width:50px; text-align:center' value='5%'> </td>" +
							                "<td class='product_total_price' id='"+i+"' >" + jsonData[0].purchase_price + "</td>" +
							                "<td > <button type='button' class='btn btn-danger btn-sm delete_btn' id='"+i+"'>Delete</button>" 
													 ).appendTo('#proct_tk_quantity');
													 total();

							        }).catch(function(error) {

							        });
				   			}else{
				   						isValid=false;
			    		        alert('select supplier');
				   			}//end if
});//end add product click function


		function total_calculation(){
			

		} //end total_calculation

		  $(document).on('click', '.delete_btn', function(){  
		             var button_id = $(this).attr("id"); 
		             	
  
           $('#tr'+button_id+'').remove(); 

      }); //end remove

     $(document).on('keyup', '.Quantity', function(){  
		             var button_id = $(this).attr("id"); 
		           
		             var quantity= parseFloat($('#tr'+button_id+'').find('.Quantity').val());
		             var rate=$('#tr'+button_id+'').find('.purchase_price').text();
		              rate = rate==''? 0: rate;
									quantity =quantity==''? 0:quantity;
		             if(!isNaN(rate) && !isNaN(quantity) ){
									var total =	quantity * rate ;
								  $('#tr'+button_id+'').find('.product_total_price').text(total.toFixed(2));
								  total()
    }else{
							$('#tr'+button_id+'').find('.product_total_price').text('');
							total()
							
					}//end if

      }); //end quantity key up

function total(){
					var arr = parseFloat($('<tr id="tr'+i+'">').find('.product_total_price').text());
					var totalcountprice=0;
			    $.each(arr, function(index, value){
								totalcountprice +=value;
			}); //end for each
			  alert(totalcountprice);
}



}); //end first document ready 




	      





</script>


<script type = "text/javascript" >
$('#submit_btn').click(function(){

	//get all value from form

		var supplier_name = $('#supplier option:selected').text(); //to get only selecte text of select box
		var grandtotal = $('#grandtotal').text();
		axios.post('/ppdf',{
			supplier_name:supplier_name,
			grandtotal:grandtotal

		}).then(function(){

		}).catch(function(){

		});




});

</script>	
@endsection


		 

		 