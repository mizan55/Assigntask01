@extends('layout.app')
@section('content')
<div class="container mt-5">
<div class="card"  style="width:700px" >
  <div class="card-header">Purchase</div>
  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-4">
								@foreach($suppliers as $supplier)
								<h1>{{$supplier->supplier_name}}</h1>
									@endforeach
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
									<option value=""></option>
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
									<option value="">select supplier</option>
									<option value=""></option>
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
									<option value=""></option>
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
  </div> <!--end row-->

  <div class="row mb-3">
		<div class="col-sm-6">
		<div class="row">
						<div class="col-sm-5"><span style="color:red">*</span>Select Item</div>
						<div class="col-sm-7">
								<select name="" id="">
									<option value="">select supplier</option>
									<option value=""></option>
								</select>
						</div>
			</div>
		</div>  <!--  end col-sm-6 -->
	
  </div> <!--end row-->


  <div class="card-footer"></div>
</div>
	
</div>

@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection

