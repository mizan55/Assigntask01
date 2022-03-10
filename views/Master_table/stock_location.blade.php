@extends('layout.app')
@section('content')

<div class="card mt-5" style="width:600px; margin: 0 auto;">

		  <div class="card">
		  	<div class="row">
		  		  <div class="card-header col-sm-9">Item Type</div>
		  		   <div class="card-header col-sm-3">
		  		   	<button type="submit" data-bs-toggle="modal" data-bs-target="#locationAddModal" class="btn 	btn-primary btn-sm" >Add Location</button>
		  		   </div>
		  	</div>
		
		  <div class="card-body">
		  <div class="container mt-3">
            
  <table class="table">
    <thead>
      <tr>
      	<td>#</td>
        <th>Item Type</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    	@foreach($StockLocations as $key => $StockLocation)
      <tr>
      
        <td>{{$key+1}}</td>
        <td>{{$StockLocation->stock_location_name }}</td>
        <td>
        	
        	<a href="b.com"  id="itemType_edit_btn" data-id="{{$StockLocation->stock_location_id}}"  data-bs-toggle="modal" data-bs-target="#ItemTypeEditModal"><i class='fas fa-edit'></i></a>
        	
        	

        </td>
      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>
		  	
		


			
				   		
				        	
			

		  </div> <!-- end cardbody -->
		  <div class="card-footer"></div>
		</div>
</div>

<!-- edit_Category_modal  -->
<!-- Modal -->

<!--end edit_Category_modal -->



<!-- Add_Category_modal  -->
<!-- Modal -->
<div class="modal fade" id="locationAddModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="mb-3 mt-3 row">
                <label for="stock_location_name " class="form-label col-sm-3">location Name</label>
                <div class="col-sm-9 input-group-sm">
                <input type="text" class="form-control" id="stock_location_name" placeholder="Enter category name" name="stock_location_name " required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
        </div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="locationSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end Add_Category_modal -->


@endsection
@section('script')
<script type="text/javascript">
//fetch id for edit	   
// $(document).on('click','#itemType_edit_btn',function(e){
// var id=parseInt($(this).attr("data-id"));

// itemTypeEdit(id);
// });
//edit function
// function itemTypeEdit(editId) {
//    axios.post('/itemtype_edit', {
//             item_type_id: editId
//         })
//         .then(function(response){

//                 var jasonData = response.data;
//                 $('#item_type_idEdit').val(jasonData[0].item_type_id);
//                 $('#item_type_nameEdit').val(jasonData[0].item_type_name );
               
            
          
//         }) //end then
//         .catch(function(error) {
                
//         }) //end catch
// } 
// end edit function
//start update portion
// fetch value for update
// $('#ItemTypeUpdateBtn').click(function(){
//                    var item_type_name=  $('#item_type_nameEdit').val();
//                    var item_type_id= $('#item_type_idEdit').val();
//                   itemTypeUpdate(item_type_id,item_type_name);

// }); 

// function itemTypeUpdate(a,b){
//  axios.post('/item_type_update',{
//     item_type_id:a,
//     item_type_name:b
//  }).then(function(response){
//     if(response.data==1){
//       alert('updated succesfully');
//       window.location = 'http://127.0.0.1:8000/item_type';
//     }

//   }).catch(function(error){

//   });
// }

//Add category start
// catch value for Add
$('#locationSaveBtn').click(function(){
         var stock_location_name = $('#stock_location_name').val();
                  alert(stock_location_name); 
var isValid =true;
   if(stock_location_name ==''){
     isValid= false;
     
     $('#stock_location_name').focus();
     return isValid;
   }
   location_store(item_type_name);
});
function location_store(a){
 axios.post('/location_store',{
      stock_location_name:a
      


  }).then(function(response){
    if(response.data==1){
      alert('item successfully inserted');
       window.location = 'http://127.0.0.1:8000/stock_location';
    }
  }).catch(function(error){

  });
}




	  
	
	
</script>
@endsection
