@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

	<div class="span9">
	
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">



			@foreach($sliderdata as $rs)
			  <div class="item">
			  <a href="{{route('product',['id'=>$rs->id])}}"><img style="height:500px;width:100%;"  src="{{Storage::url($rs->image)}}"></a>
                <div class="carousel-caption">
                      <h4>{{$rs->title}} , {{$rs->price}} TL</h4>		
                </div>
              </div>
			  @endforeach
		
            </div>

			
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>	

			  @foreach($productlist1 as $rs)
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
			
				<a class="zoomTool" href="{{route('product',['id'=>$rs->id])}}" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="height:300px;width:300px;"></a>
				<div class="caption cntr">
					<p>{{$rs->title}}</p>
					<p><strong>{{$rs->price}} ₺</strong></p>
					<h4><a href="{{route('shopcart.add',['id'=>$rs->id])}}" class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
			
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			@endforeach
			
	
	<div class="well well-small">


	</div>
	<hr>
	
	</div>
	</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>

  
@endsection