@extends('layout.app')
@section('content')
<div class="card mt-5" style="width:600px; margin: 0 auto;">

      <div class="card">
        <div class="row">
            <div class="card-header col-sm-9">Customer</div>
             <div class="card-header col-sm-3">
              <button type="submit" data-bs-toggle="modal" data-bs-target="#CustomerAddModal" class="btn  btn-primary btn-sm" >Add Customer</button>
             </div>
        </div>
    
      <div class="card-body">
      <div class="container mt-3">
            
  <table class="table">
    <thead>
      <tr>
        <td>#</td>
        <th>Customer Name</th>
        <th>Customer email</th>
        <th>Customer mobile</th>
        <th>Customer Address</th>
        <th>Customer Img</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($custommers as $key=>$Customer)
      <tr>
      
        <td>{{$key+1}}</td>
        <td>{{$Customer->custommer_name}}</td>
        <td>{{$Customer->custommer_email}}</td>
        <td>{{$Customer->custommer_mobile}}</td>
        <td>{{$Customer->custommer_Address}}</td>
        <td>{{$Customer->Customer_image}}</td>
        <td>
          
          <a href="b.com"  id="Customer_edit_btn" data-id="{{$Customer->custommer_id}}"  data-bs-toggle="modal" data-bs-target="#CustomerAddModalEdit"><i class='fas fa-edit'></i></a>
      
          

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






<!-- CustomerAddModal_modal  -->
<!-- Modal -->
<div class="modal fade" id="CustomerAddModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Customer information</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <div class="row">
    <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_name" class="form-label col-sm-2"> Name</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_name" placeholder="Enter Customer name" name="custommer_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_email" class="form-label col-sm-2">email</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_email" placeholder="Enter username" name="custommer_email" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->

         <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_mobile" class="form-label col-sm-2"> mobile</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_mobile" placeholder="Enter product name" name="custommer_mobile" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_Address" class="form-label col-sm-2">Address</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_Address" placeholder="Enter custommer_Address" name="custommer_Address" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->
        <div class="mb-3 mt-3 row">
                <label for="Customer_picture" class="form-label col-sm-2">Picture</label>
                <div class="col-sm-10 input-group-sm">
                <input type="file" class="form-control" id="Customer_picture" placeholder="Enter username" name="Customer_picture" >
               
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
        
  </div> <!-- {{-- end row --}} -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="CustomerSaveBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end CustomerAddModal -->





<!-- CustomerEditModal_modal  -->
<!-- Modal -->
<div class="modal fade" id="CustomerAddModalEdit"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Customer information Edit</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <div class="row">
    <div class="row">
        <div class="col-sm-6">
        <input type="text" id="customer_idEdit" name="custommer_id" hidden="">
              <div class="mb-3 mt-3 row">
                <label for="custommer_name_nameEdit" class="form-label col-sm-2"> Name</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_name_nameEdit" placeholder="Enter Customer name" name="custommer_name_nameEdit" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_emailEdit" class="form-label col-sm-2">email</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_emailEdit" placeholder="Enter username" name="custommer_email" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->

         <div class="row">
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_mobileEdit" class="form-label col-sm-2"> mobile</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_mobileEdit" placeholder="Enter product name" name="custommer_mobileEdit" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div><!-- col-sm-6 -->
        <div class="col-sm-6">
        
              <div class="mb-3 mt-3 row">
                <label for="custommer_AddressEdit" class="form-label col-sm-2">Address</label>
                <div class="col-sm-10 input-group-sm">
                <input type="text" class="form-control" id="custommer_AddressEdit" placeholder="Enter custommer_Address" name="custommer_AddressEdit" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
      </div> <!-- col-sm-6 -->


      </div> <!-- row-end -->
        <div class="mb-3 mt-3 row">
                <label for="Customer_picture" class="form-label col-sm-2">Picture</label>
                <div class="col-sm-10 input-group-sm">
                <input type="file" class="form-control" id="Customer_picture" placeholder="Enter username" name="Customer_picture" >
               
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                </div> 
        
  </div> <!-- {{-- end row --}} -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="CustomerUpdateBtn" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--end CustomerAddModal -->




@endsection

@section('script')
<script type="text/javascript">
// fetch id for edit    
$(document).on('click','#Customer_edit_btn',function(e){
var id=parseInt($(this).attr("data-id"));


getCustomerEdit(id);
});
// edit function
function getCustomerEdit(editId) {
   axios.post('/customer_edit', {
            Customer_id:editId
        })
        .then(function(response){

                var jasonData = response.data;
                $('#customer_idEdit').val(jasonData[0].custommer_id );
                $('#custommer_name_nameEdit').val(jasonData[0].custommer_name);
                $('#custommer_emailEdit').val(jasonData[0].custommer_email );
                $('#custommer_mobileEdit').val(jasonData[0].custommer_mobile);
                $('#custommer_AddressEdit').val(jasonData[0].custommer_Address);
               
            
          
        }) //end then
        .catch(function(error) {
                
        }) //end catch
} 
// end edit function

// start update portion
// fetch value for update
$('#CustomerUpdateBtn').click(function(){
         var Customer_id = $('#customer_idEdit').val();
         var Customer_name = $('#custommer_name_nameEdit').val();
         var Customer_email = $('#custommer_emailEdit').val();
         var Customer_mobile = $('#custommer_mobileEdit').val();
         var Customer_address = $('#custommer_AddressEdit').val();
         alert(Customer_email);
         CustomerUpdate(Customer_id,Customer_name,Customer_email,Customer_mobile,Customer_address);

}); 

function CustomerUpdate(i,a,b,c,d){
 axios.post('/customer_update',{
     custommer_id:i,
      custommer_name:a,
      custommer_email :b,
      custommer_mobile:c,
      custommer_Address:d
 }).then(function(response){
    if(response.data==1){
      alert('updated succesfully');
      window.location = 'http://127.0.0.1:8000/customer';
    }

  }).catch(function(error){

  });
}

//Add category start
// catch value for Add
$('#CustomerSaveBtn').click(function(){
alert('hi');
         var Customer_name = $('#custommer_name').val();
         var Customer_email = $('#custommer_email').val();
         var Customer_mobile = $('#custommer_mobile').val();
         var Customer_address = $('#custommer_Address').val();


                 
var isValid =true;
   if(Customer_name ==''){
     isValid= false;
     alert('Input Customer_name ');
     $('#custommer_name').focus();
     return isValid;
   }
  Customer_store(Customer_name,Customer_email,Customer_mobile,Customer_address);
});
function Customer_store(a,b,c,d){
 axios.post('/customer_store',{
      custommer_name:a,
      custommer_email :b,
      custommer_mobile:c,
      custommer_Address:d
      


  }).then(function(response){
    if(response.data==1){
      alert('customer successfully inserted');
       window.location = 'http://127.0.0.1:8000/customer';
    }
  }).catch(function(error){

  });
}




    
  
  
</script>
@endsection
