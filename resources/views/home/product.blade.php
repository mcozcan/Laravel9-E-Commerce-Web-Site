@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

<div class="span9">
    <ul class="breadcrumb">
    <li><a href="/">Home</a> <span class="divider">/</span></li>
    <li><a href="">{{$data->category->title}}</a> <span class="divider">/</span></li>
		
    <li class="active">{{$data->title}}</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item">
                   <a href="#"> <img src="{{Storage::url($data->image)}}" alt="" style="width:300px;height:300px;"></a>
                  </div>
				  @foreach($images as $rs)
                  <div class="item">
                     <a href="#"> <img src="{{Storage::url($rs->image)}}" alt="" style="width:300px;height:300px;"></a>
                  </div>
				  @endforeach
                  <div class="item active">
                    <a href="#"> <img src="{{Storage::url($rs->image)}}" alt="" style="width:300px;height:300px;"></a>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
			</div>
			<div class="span7">
		
				<hr class="soft">
				
				<form class="form-horizontal qtyFrm" form action="/shopcart/store/" method="post">
					@csrf
				  <div class="control-group">
					<label class="control-label"><span>{{$data->price}} ₺</span></label>
					<div class="controls">
					<label>Quantitiy</label>
					<input type="number" class="input" name="quantity" value="1" min="1">
					<input  class="input" name="id" value="{{$data->id}}" type="hidden">
					</div>
				  </div>
				
				  <div class="control-group">



					
				  <button type="submit" class="shopBtn" ><span class=" icon-shopping-cart"></span> Add to cart</button>
				</p></form>
			</div>
			</div>
				<hr class="softn clr">


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li class=""></li>
              <li class="dropdown">
                

            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Description:</td><td class="techSpecTD2">{{$data->description}}</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Status:</td><td class="techSpecTD2">{{$data->status}}</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Details:</td><td class="techSpecTD2">{!! $data->detail !!}</td></tr>
				</tbody>
				</table>
				<p>-------------------------------------------------------------------------------------------------------------------------------------------</p>
				

				<p>
				
				</p>
			</div>

			<ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Comments</a></li>
              <li class=""></li>
              <li class="dropdown">
			  <h4>Comments</h4>
	@foreach($reviews as $rs)
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			<h5> comment and score = {{$rs->rate}}</h5>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">User Name:</td><td class="techSpecTD2">{{$rs->user->name}}</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Subject:</td><td class="techSpecTD2">{{$rs->subject}}</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Comment:</td><td class="techSpecTD2">{{$rs->review}}</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">rate:</td><td class="techSpecTD2">{{$rs->rate}}</td></tr>
				</tbody>
				</table>
				<p>--------------------------------------------------------------------------------------------------------------------------------</p>
				@endforeach

				<p>
				<form role="form"  method="post"  action="/storecomment" enctype="multipart/form-data" >
@csrf
<p>

<label>

<input type="hidden" name="product_id" value="{{$data->id}}" >
</label> 
</p>

<label>Subject<br>

<input type="text" name="subject"  style='width: 300px;' required>
</label> 
</p>


	
<p>
<label>Review <br>
<textarea name="review" maxlength="500"></textarea>
</p>


<p>
<label>Rate<br>
<select name="rate">
<option value="" selected="selected">Select One</option>
<option value="5" >5</option>
<option value="4" >4</option>
<option value="3" >3</option>
<option value="2" >2</option>
<option value="1" >1</option>

</select>
</label> 
</p>


@auth
<p><button type="submit" class="btn btn-success">Submit</button></p>
@else
<li><a href="/login">Login</a> <span class="prmary-btn">For Submit Your Review , Please Login</span></li>
@endauth
</form>
				</p>
			</div>
			
			<hr class="soften">
			
				</div>
            </div>

</div>
</div>
@endsection