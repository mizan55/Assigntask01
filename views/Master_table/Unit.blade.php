@extends('layout.app')
@section('content')

<div class="card mt-5" style="width:600px; margin: 0 auto;">

		  <div class="card">
		  	<div class="row">
		  		  <div class="card-header col-sm-9">Units</div>
		  		   <div class="card-header col-sm-3">
		  		   	<button type="submit" data-bs-toggle="modal" data-bs-target="#UnitAddModal" class="btn 	btn-primary btn-sm" >Add Unit</button>
		  		   </div>
		  	</div>
		
		  <div class="card-body">
		  <div class="container mt-3">
            
  <table class="table">
    <thead>
      <tr>
      	<td>#</td>
        <th>Unit Name</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    	@foreach($units as $key => $unit)
      <tr>
      
        <td>{{$key+1}}</td>
        <td>{{$unit->unit_name}}</td>
        <td>
        	
        	<a href="b.com"  id="unit_edit_btn" data-id="{{$unit->unit_id}}"  data-bs-toggle="modal" data-bs-target="#UnitEditModal"><i class='fas fa-edit'></i></a>
        	<a href="#"><i class='fas fa-trash-alt'></i></a>
        	

        </td>
      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>

</div> <!-- end cardbody -->
<div class="card-footer"></div>
</div>
</div> <!-- end unit index -->

<!-- Add_Unit_modal  -->
<!-- Modal -->
<div class="modal fade" id="UnitAddModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="mb-3 mt-3 row">
                <label for="unit_name" class="form-label col-sm-3">Unit Name</label>
                <div class="col-sm-9 input-group-sm">
                <input type="text" class="form-control" id="unit_name" placeholder="Enter category name" name="unit_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
        </div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="UnitAddSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end Add_Unit_modal -->

<!-- Edit_Unit_modal  -->
<!-- Modal -->
<div class="modal fade" id="UnitEditModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <input type="text" class="form-control" id="unit_id" placeholder="Enter category name" name="unit_id" hidden>
        <div class="mb-3 mt-3 row">
                <label for="unit_name_edit" class="form-label col-sm-3">Unit Name</label>
                <div class="col-sm-9 input-group-sm">
                <input type="text" class="form-control" id="unit_name_edit" placeholder="Enter category name" name="unit_name_edit" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div> 
        </div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="UnitEditSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end Edit_Unit_modal  -->



@endsection

@section('script')
<script type="text/javascript">
//Add unit start
// catch value for Add
$('#UnitAddSaveBtn').click(function(){
         var u_name = $('#unit_name').val();
                   
var isValid =true;
   if(u_name ==''){
     isValid= false;
     alert('Input Category Name');
     $('#unit_name').focus();
     return isValid;
   }
   Category_store(u_name);
});
function Category_store(u_name){
 axios.post('/unit_store',{
      unit_name:u_name,
      


  }).then(function(response){
    if(response.data==1){
      alert('unit successfully inserted');
       window.location = 'http://127.0.0.1:8000/unit';
    }
  }).catch(function(error){

  });
} //end add unit

//edit unit start
//fetch id for edit	   
$(document).on('click','#unit_edit_btn',function(e){
var id=parseInt($(this).attr("data-id"));

Unit_Edit(id);
});
//edit function
function Unit_Edit(editId) {
   axios.post('/unit_edit', {
            unit_id: editId
        })
        .then(function(response){

                var jasonData = response.data;
                $('#unit_name_edit').val(jasonData[0].unit_name);
                $('#unit_id').val(jasonData[0].unit_id);
               
            
          
        }) //end then
        .catch(function(error) {
                
        }) //end catch
} 
// end edit unit function


</script>
@endsection
