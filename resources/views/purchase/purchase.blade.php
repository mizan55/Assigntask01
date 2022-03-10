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
	
  </div> <!--end row-->
  <hr>
  <div class="row" id="proct_tk_quantity">
  
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
  		
  	</div>
  </div>


  <div class="card-footer"></div>
</div>
	
</div>

@endsection
@section('script')
<script type = "text/javascript" >
    $('#productSelect').change(function() {
    	var supplierval=$('#supplier').val();
	var isValid=true;
    	if(supplierval>0){

    		 var product_id = parseInt($('#productSelect').val());

				        $('#proct_tk_quantity').empty();
				        $('#totalvat').text('');
				        $('#total').text('');
				        $('#cdiscount').text('');

				        $('#grandtotal').text('');
				        axios.post('/pproduct', {
				            product_id: product_id
				        }).then(function(response) {
				            var jsonData = response.data;
				            $('<div>').html(

				                "<table class='table table-hover'>" +
				                "<thead>" +
				                "<tr>" +
				                "<th>Product</th>" +
				                "<th>Price (Tk.)</th>" +
				                "<th>Quantity</th>" +

				                "<th>VAT (%)</th>" +
				                "<th>Amount (Tk.)</th>" +
				                "<th>Action</th>" +

				                "</tr>" +
				                "</thead>" +
				                "<tbody>" +
				                " <tr>" +
				                "<td id='name'>" + jsonData[0].products_name + "</td>" +
				                "<td id='purchase_price'>" + jsonData[0].purchase_price + "</td>" +
				                "<td><input type='text' id='Quantity' value='1' style='width:50px; text-align:center'> </td>" +
				                "<td><input type='text' id='vat'  style='width:50px; text-align:center' value='5%'> </td>" +
				                "<td>" + jsonData[0].purchase_price + "</td>" +
				                "<td > <button type='button' class='btn btn-danger btn-sm' id='delete_btn'>Delete</button>" +

				                "</tr>" +
				                " </tbody>" +
				                "  </table>"


				            ).appendTo('#proct_tk_quantity');


				            purchase_calculation();




				        }).catch(function(error) {

				        });
    		
    	}else{
    		isValid=false;
    		alert('select supplier');
    		$('#supplier').focus();
    		return isValid;
    	}
}); //end product select onchange

function purchase_calculation() {
	var isValid=true;
	var supplierval=$('#supplier').val();
    var purchase_price = $('#purchase_price').text();
    var Quantity = parseInt($('#Quantity').val());
    var discount = $('#discount').val();
    var subtotal = purchase_price * Quantity;
    var vat = subtotal * 0.05;
    var bgrandtotal = subtotal + vat;
    var grandtotal = bgrandtotal - discount;

    $('#Quantity').keyup(function() {
			        var Quantity = parseInt($('#Quantity').val());
			        if(Quantity>=1){
			        	 var Quantity = parseInt($('#Quantity').val());
			        var discount = $('#discount').val();
			        var grandtotal = bgrandtotal - discount;
			        var subtotal = purchase_price * Quantity;
			        var vat = subtotal * 0.05;
			        var grandtotal = subtotal + vat;
			        $('#total').text(subtotal);
			        $('#totalvat').text(vat);
			        $('#grandtotal').text(grandtotal);

			        }else{

				        $('#totalvat').text('');
				        $('#total').text('');
				        $('#cdiscount').text('');

				        $('#grandtotal').text('');
			        	alert('cant be zero');
			        }
			       
			       
			    
    });


/////discount start

			       $('#discount').keyup(function() {

			                var discount = $('#discount').val();
			                var Quantity = parseInt($('#Quantity').val());
			                var subtotal = purchase_price * Quantity;
			             	var isValid =true;
			                if(discount<0 ){
			                	var isValid =false;
			                 	alert(' Discount Can not be Zero ');
			                 	return isValid;
			                 }


			                if(discount>subtotal){
			                	var isValid =false;
			                 	alert(' Discount Can not be Greater than total ');
			                 	return isValid;
			                 }else{
					                		var Quantity = parseInt($('#Quantity').val());
							        		var discount = $('#discount').val();
							        		var grandtotal = bgrandtotal - discount;
							        		var subtotal = purchase_price * Quantity;
							        		var vat = subtotal * 0.05;
							        		var grandtotal = subtotal + vat - discount;
							        		$('#cdiscount').text(discount);
							        		$('#total').text(subtotal);
							        		$('#totalvat').text(vat);
							        		$('#grandtotal').text(grandtotal);


			                 }


				
					   
			       		   
			       
					 
                     }); //discount keyup
/////discount End




    $('#totalvat').text(vat);
    $('#total').text(subtotal);
    $('#cdiscount').text(discount);

    $('#grandtotal').text(grandtotal);

    
    // delete start
    $("#delete_btn").click(function() {
        $('#proct_tk_quantity').empty();
        $('#totalvat').text('');
        $('#total').text('');
        $('#cdiscount').text('');

        $('#grandtotal').text('');

    });
    // delete end


}




</script>
@endsection


		 

		 