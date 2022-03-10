@extends('layout.app')
@section('content')
<div class="container mt-3">
	<div class="row">
		<button type="button" class="btn  btn-primary btn-sm" style="width: 100px">Add item</button>	
		<div class="was-validated" style="border: 1px solid green; padding: 25px">


			<div class="row">
				<div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="products_name" class="form-label col-sm-2">Product Name</label>
				        <div class="col-sm-10 input-group-sm">
				      	<input type="text" class="form-control" id="products_name" placeholder="Enter product name" name="products_name" required>
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- col-sm-6 -->
		    <div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="products_item_id" class="form-label col-sm-2">Item ID</label>
				        <div class="col-sm-10 input-group-sm">
				      	<input type="text" class="form-control" id="products_item_id" placeholder="Enter username" name="products_item_id" required>
				       <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div> <!-- col-sm-6 -->


			</div> <!-- row-end -->


			<div class="row">
				<div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="products_category_id" class="form-label col-sm-2">Category</label>
				        <div class="col-sm-10 input-group-sm">
				        	<select class="form-select" name="products_category_id" id="products_category_id" required >
											  <option selected disabled value="">Select Category</option>
											  @foreach($product_categories as $product_category)
													  <option value="{{$product_category->item_cat_id}}">{{$product_category->item_cat_name}}
													  </option>
											  @endforeach
											  
							</select>
				      	
				       
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- col-sm-6 -->
	 	    <div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="products_item_type_id" class="form-label col-sm-2">Item Type</label>
				        <div class="col-sm-10 input-group-sm">
				      	<select class="form-select" name="products_item_type_id" id="products_item_type_id" required >
											  <option selected disabled value="">Select item Type</option>
											   @foreach($product_item_type as $item_type)
													  <option value="{{$item_type->item_type_id}}">{{$item_type->item_type_name}}
													  </option>
											  @endforeach
						</select>
				        
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div> <!-- col-sm-6 -->


			</div> <!-- row-end -->

			<div class="row">
				<div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="units" class="form-label col-sm-2">Units</label>
				        <div class="col-sm-10 input-group-sm">
				      	<select class="form-select" name="units" id="units" required >
											  <option selected disabled value="">Select Category</option>
											  @foreach($units as $unit)
											  <option value="{{$unit->unit_id}}">{{$unit->unit_name}}</option>
											  @endforeach
											  
						</select>
				        
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- col-sm-6 -->
	 	    <div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="vat_type" class="form-label col-sm-2">VAT Type</label>
				        <div class="col-sm-10 input-group-sm">
				      	<select class="form-select" name="vat_type" id="vat_type" required >
											  <option selected disabled value="">Select vat type</option>
											   @foreach($vat_types as $vat_type)
													  <option value="{{$vat_type->vat_type_id}}">{{$vat_type->vat_type_name}}
													  </option>
											  @endforeach
						</select>
				       
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div> <!-- col-sm-6 -->


			</div> <!-- row-end -->

			<div class="row ">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="product_desc" class="form-label col-sm-2">Product Description</label>
				        <div class="col-sm-10 input-group-sm">
				      <textarea class="form-control " id="product_desc" placeholder="Required example textarea" required></textarea>
				    
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- row-end -->

			<div class="row">
				<div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="purchase_price" class="form-label col-sm-2">Purchase Price</label>
				        <div class="col-sm-10 input-group-sm">
				      	<input type="text" class="form-control" id="purchase_price" placeholder="Enter username" name="purchase_price" required>
				       
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- col-sm-6 -->
	 	    <div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="retail_price" class="form-label col-sm-2">Retail Price</label>
				        <div class="col-sm-10 input-group-sm">
				      	<input type="text" class="form-control" id="retail_price" placeholder="Enter username" name="retail_price" required>
				        
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div> <!-- col-sm-6 -->


			</div> <!-- row-end -->


		<div class="row">
				<div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="product_status" class="form-label col-sm-2">Status</label>
				        <div class="col-sm-10 input-group-sm">
				      	<select class="form-select" name="product_status" id="product_status" required >
											  <option selected disabled value="">Select Status</option>
											  <option value="1">Active</option>
											  <option value="0">Deactive</option>
											  
						</select>
				        
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div><!-- col-sm-6 -->
	 	    <div class="col-sm-6">
				
				   		<div class="mb-3 mt-3 row">
				        <label for="product_image" class="form-label col-sm-2">Picture</label>
				        <div class="col-sm-10 input-group-sm">
				      	<input type="file" class="form-control" id="product_image" placeholder="Enter username" name="product_image" >
				       
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
				        </div> 
			</div> <!-- col-sm-6 -->


			</div> <!-- row-end -->








			  <button type="submit" id="product_submit_btn" class="btn btn-primary">Submit</button>		  
</div>

		
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">

 // product add start
 //get value from add product form
$('#product_submit_btn').click(function(){
	
                    var p_name = $('#products_name').val();
                    var p_item_id =parseInt($('#products_item_id').val()); 
					
                    var p_cat_id = 	parseInt($('#products_category_id').val());
                    var p_type_id = parseInt( $('#products_item_type_id').val());
                    
                    var p_units =  parseInt( $('#units').val());
                    var p_vat_typ = $('#vat_type').val();
                    var p_desc = $('#product_desc').val(); 

                    var p_perc_price =parseFloat($('#purchase_price').val()).toFixed(2);
                    var p_retail_price=parseFloat($('#retail_price').val()).toFixed(2);
                    var p_status =   parseInt($('#product_status').val()); 
   var isValid =true;
   if(p_desc ==''){
	   isValid= false;
	   alert('select Product Description');
	   $('#product_desc').focus();
	   return isValid;
   }
   product_store(p_name,p_item_id,p_cat_id,p_type_id,p_units,p_vat_typ,p_desc,p_perc_price,p_retail_price,p_status);

                    //var p_retail_price = $('#retail_price').val(); 
                  
 }); //end get value from add product form
//Product store function start
function   product_store(p_name,p_item_id,p_cat_id,p_type_id,p_units,p_vat_typ,p_desc,p_perc_price,p_retail_price,p_status){

	axios.post('/product_store',{
			products_name:p_name,
			products_item_id:p_item_id,
			products_category_id:p_cat_id,
			products_item_type_id:p_type_id,
			units:p_units,
			vat_type:p_vat_typ,
			product_desc:p_desc,
			purchase_price:p_perc_price,
			retail_price:p_retail_price,
			product_status:p_status


	}).then(function(response){
		if(response.data==1){
			alert('successfully inserted');
		}
	}).catch(function(error){

	});

}

</script>
@endsection
