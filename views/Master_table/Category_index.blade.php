@extends('layout.app')
@section('content')
	
		  		

<div class="card mt-5" style="width:600px; margin: 0 auto;">

		  <div class="card">
		  	<div class="row">
		  		  <div class="card-header col-sm-9">Category</div>
		  		   <div class="card-header col-sm-3">
		  		   	<button type="submit" data-bs-toggle="modal" data-bs-target="#CategoryAddModal" class="btn 	btn-primary btn-sm" >Add Category</button>
		  		   </div>
		  	</div>
		
		  <div class="card-body">
		  <div class="container mt-3">
            
  <table class="table">
    <thead>
      <tr>
      	<td>#</td>
        <th>Category Name</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    	@foreach($categories as $key => $category)
      <tr>
      
        <td>{{$key+1}}</td>
        <td>{{$category->item_cat_name}}</td>
        <td>
        	
        	<a href="b.com"  id="Category_edit_btn" data-id="{{$category->item_cat_id}}"  data-bs-toggle="modal" data-bs-target="#CategoryEditModal"><i class='fas fa-edit'></i></a>
        	
        	

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
<div class="modal fade" id="CategoryEditModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      	<div class="mb-3 mt-3 row">
				        <label for="item_cat_name_edit" class="form-label col-sm-3">Product Name</label>
				        <div class="col-sm-9 input-group-sm">
				      	<input type="text" class="form-control" id="item_cat_name_edit" placeholder="Enter category name" name="item_cat_name_edit" required>
				        <div class="invalid-feedback">Please fill out this field.</div>
				        </div>
                <input type="text" class="form-control" id="item_cat_id_edit" placeholder="Enter category name" name="item_cat_id_edit" hidden="" >
				</div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="categoryUpdateSaveBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end edit_Category_modal -->



<!-- Add_Category_modal  -->
<!-- Modal -->
<div class="modal fade" id="CategoryAddModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="mb-3 mt-3 row">
                <label for="item_cat_name" class="form-label col-sm-3">Product Name</label>
                <div class="col-sm-9 input-group-sm">
                <input type="text" class="form-control" id="item_cat_name" placeholder="Enter category name" name="item_cat_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
        </div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="categoryAddSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end Add_Category_modal -->


@endsection
@section('script')
<script type="text/javascript">
//fetch id for edit	   
$(document).on('click','#Category_edit_btn',function(e){
var id=$(this).attr("data-id");

getCategoryEdit(id);
});
//edit function
function getCategoryEdit(editId) {
   axios.post('/category_edit', {
            item_cat_id: editId
        })
        .then(function(response){

                var jasonData = response.data;
                $('#item_cat_name_edit').val(jasonData[0].item_cat_name);
                $('#item_cat_id_edit').val(jasonData[0].item_cat_id);
               
            
          
        }) //end then
        .catch(function(error) {
                
        }) //end catch
} 
// end edit function
//start update portion
// fetch value for update
$('#categoryUpdateSaveBtn').click(function(){
                   var item_cat_name=  $('#item_cat_name_edit').val();
                   var item_cat_id= $('#item_cat_id_edit').val();
                   getCategoryUpdate(item_cat_id,item_cat_name);

}); 

function getCategoryUpdate(item_cat_id,item_cat_name){
 axios.post('/category_update',{
    item_cat_id:item_cat_id,
    item_cat_name:item_cat_name
 }).then(function(response){
    if(response.data==1){
      alert('updated succesfully');
      window.location = 'http://127.0.0.1:8000/category';
    }

  }).catch(function(error){

  });
}

//Add category start
// catch value for Add
$('#categoryAddSaveBtn').click(function(){
         var c_name = $('#item_cat_name').val();
                   
var isValid =true;
   if(c_name ==''){
     isValid= false;
     alert('Input Category Name');
     $('#item_cat_name').focus();
     return isValid;
   }
   Category_store(c_name);
});
function Category_store(c_name){
 axios.post('/category_store',{
      item_cat_name:c_name,
      


  }).then(function(response){
    if(response.data==1){
      alert('Category successfully inserted');
       window.location = 'http://127.0.0.1:8000/category';
    }
  }).catch(function(error){

  });
}




	  
	
	
</script>
@endsection


