@extends('layout.app')
@section('content')
<div class="card mt-5" style="width:600px; margin: 0 auto;">

      <div class="card">
        <div class="row">
            <div class="card-header col-sm-9">Supplier</div>
             <div class="card-header col-sm-3">
              <button type="submit" data-bs-toggle="modal" data-bs-target="#SupplierAddModal" class="btn  btn-primary btn-sm" >Add Supplier</button>
             </div>
        </div>
    
      <div class="card-body">
      <div class="container mt-3">
            
  <table class="table">
    <thead>
      <tr>
        <td>#</td>
        <th>Supplier Name</th>
        <th>Supplier email</th>
        <th>Supplier mobile</th>
        <th>Supplier Address</th>
        <th>Supplier Img</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($suppliers as $key=>$supplier)
      <tr>
      
        <td>{{$key+1}}</td>
        <td>{{$supplier->supplier_name}}</td>
        <td>{{$supplier->supplier_email}}</td>
        <td>{{$supplier->supplier_mobile}}</td>
        <td>{{$supplier->supplier_Address}}</td>
        <td>{{$supplier->supplier_image}}</td>
        <td>
          
          <a href="b.com"  id="Supplier_edit_btn" data-id="{{$supplier->supplier_id}}"  data-bs-toggle="modal" data-bs-target="#SupplierAddModalEdit"><i class='fas fa-edit'></i></a>
      
          

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



<!-- SupplierAddModal_modal  -->
<!-- Modal -->
<div class="modal fade" id="SupplierAddModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Supplier information</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <div class="row">
    <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_name" class="form-label col-sm-2"> Name</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_name" placeholder="Enter supplier name" name="supplier_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_email" class="form-label col-sm-2">email</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_email" placeholder="Enter username" name="supplier_email" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->

         <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_mobile" class="form-label col-sm-2"> mobile</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_mobile" placeholder="Enter product name" name="supplier_mobile" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_address" class="form-label col-sm-2">Address</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_address" placeholder="Enter supplier_address" name="supplier_address" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->
        <div class="mb-3 mt-3 row">
                <label for="supplier_picture" class="form-label col-sm-2">Picture</label>
                <div class="col-sm-10 input-group-sm">
                <input type="file" class="form-control" id="supplier_picture" placeholder="Enter username" name="supplier_picture" >
               
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
        
  </div> <!-- {{-- end row --}} -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="SupplierSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end SupplierAddModal -->


<!-- SupplierEditModal_modal  -->
<!-- Modal -->
<div class="modal fade" id="SupplierAddModalEdit"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Supplier information</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <div class="row">
    <div class="row">
        <div class="col-sm-6">
         <input type="text" id="supplier_idEdit" name="supplier_id" hidden="">
              <div class="mb-3 mt-3 row">
                <label for="supplier_nameEdit" class="form-label col-sm-2"> Name</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_nameEdit" placeholder="Enter supplier name" name="supplier_nameEdit" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_emailEdit" class="form-label col-sm-2">email</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_emailEdit" placeholder="Enter username" name="supplier_emailEdit" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->

         <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_mobileEdit" class="form-label col-sm-2"> mobile</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_mobileEdit" placeholder="Enter product name" name="supplier_mobileEdit" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="supplier_addressEdit" class="form-label col-sm-2">Address</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="supplier_addressEdit" placeholder="Enter supplier_address" name="supplier_addressEdit" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->
        <div class="mb-3 mt-3 row">
                <label for="supplier_picture" class="form-label col-sm-2">Picture</label>
                <div class="col-sm-10 input-group-sm">
                <input type="file" class="form-control" id="supplier_picture" placeholder="Enter username" name="supplier_picture" >
               
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
        
  </div> <!-- {{-- end row --}} -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="SupplierUpdateBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end SupplierEditModal -->

@endsection

@section('script')
<script type="text/javascript">
// fetch id for edit    
$(document).on('click','#Supplier_edit_btn',function(e){
var id=parseInt($(this).attr("data-id"));


getSupplierEdit(id);
});
// edit function
function getSupplierEdit(editId) {
   axios.post('/supplier_edit', {
            supplier_id:editId
        })
        .then(function(response){

                var jasonData = response.data;
                  $('#supplier_idEdit').val(jasonData[0].supplier_id);
                $('#supplier_nameEdit').val(jasonData[0].supplier_name);
                $('#supplier_emailEdit').val(jasonData[0].supplier_email);
                 $('#supplier_mobileEdit').val(jasonData[0].supplier_mobile);
                $('#supplier_addressEdit').val(jasonData[0].supplier_Address);
               
            
          
        }) //end then
        .catch(function(error) {
                
        }) //end catch
} 
// end edit function

// start update portion
// fetch value for update
$('#SupplierUpdateBtn').click(function(){
         var supplier_id = $('#supplier_idEdit').val();
         var supplier_name = $('#supplier_nameEdit').val();
         var supplier_email = $('#supplier_emailEdit').val();
         var supplier_mobile = $('#supplier_mobileEdit').val();
         var supplier_address = $('#supplier_addressEdit').val();
         SupplierUpdate(supplier_id,supplier_name,supplier_email,supplier_mobile,supplier_address);

}); 

function SupplierUpdate(i,a,b,c,d){
 axios.post('/supplier_update',{
   supplier_id:i,
     supplier_name:a,
      supplier_email:b,
      supplier_mobile:c,
      supplier_address:d
 }).then(function(response){
    if(response.data==1){
      alert('updated succesfully');
      window.location = 'http://127.0.0.1:8000/supplier';
    }

  }).catch(function(error){

  });
}

//Add category start
// catch value for Add
$('#SupplierSaveBtn').click(function(){

         var supplier_name = $('#supplier_name').val();
         var supplier_email = $('#supplier_email').val();
         var supplier_mobile = $('#supplier_mobile').val();
         var supplier_address = $('#supplier_address').val();
                   
var isValid =true;
   if(supplier_name ==''){
     isValid= false;
     alert('Input supplier_name ');
     $('#supplier_name').focus();
     return isValid;
   }
   Supplier_store(supplier_name,supplier_email,supplier_mobile,supplier_address);
});
function Supplier_store(a,b,c,d){
 axios.post('/supplier_store',{
      supplier_name:a,
      supplier_email:b,
      supplier_mobile:c,
      supplier_address:d
      


  }).then(function(response){
    if(response.data==1){
      alert('Category successfully inserted');
       window.location = 'http://127.0.0.1:8000/supplier';
    }
  }).catch(function(error){

  });
}




    
  
  
</script>
@endsection
