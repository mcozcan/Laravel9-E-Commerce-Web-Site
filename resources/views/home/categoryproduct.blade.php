@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')
<div class="span9">
<!-- 
New Products
-->	

	<div class="well well-small">
	
	<h3>Our Products </h3>
	@foreach($products as $rs)
		<div class="row-fluid" >
	
		  <ul class="thumbnails">

			<li class="span4" >
		
			  <div class="thumbnail" >
				<a href="{{route('product',['id'=>$rs->id])}}" class="overlay"></a>
				<a class="zoomTool" href="{{route('product',['id'=>$rs->id])}}" title="add to cart" style="display: none;"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}"style="width:300px;height: 300px;"></a>
				<div class="caption cntr">
					<p></p>
					<p><strong>{{$rs->title}}</strong></p>
					<p><strong>{{$rs->price}} ₺</strong></p>
					<h4><a href="{{route('shopcart.add',['id'=>$rs->id])}}" class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">

					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			@endforeach

		
		  </ul>
		</div>
	
	</div>

	</div>


@endsection