
@extends('layout.app')
@section('content')

@foreach($products as $product)
<div class="row">
	<div class="col-sm-1">{{$product->products_name}}</div>
	<div class="col-sm-1">{{$product->Category[0]->products_item_name}}</div>
	<div class="col-sm-1">{{$product->purchase_price}}</div>
		<div class="col-sm-1">{{$product->retail_price}}</div>
			<div class="col-sm-1">{{$product->product_desc}}</div>
			<div class="col-sm-1">{{$product->product_status}}</div>
			<div class="col-sm-1">{{$product->Item_Type[0]->item_type_name}}</div>
			<div class="col-sm-1">{{$product->Unit[0]->unit_name}}</div>

	<div class="col-sm-1">{{$product->Category[0]->item_cat_name}}</div>
	<div class="col-sm-1">{{$product->vat_type_name}}</div>
	<!-- why send single value rther than array -->
	
	<br/>


</div>
@endforeach

@endsection
