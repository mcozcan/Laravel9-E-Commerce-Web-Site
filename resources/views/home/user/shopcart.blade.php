@extends('layouts.frontbase')

@section('title', 'Shop Cart')

@section('content')

<div class="span12" style="width: 700px;">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right">  </small></h1>
	<hr class="soften">	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Unit price</th>
                  <th>Qty </th>
                  <th>Total </th>
				</tr>
              </thead>
			  @php
			  ($total=0)
			  @endphp
			  @foreach($data as $rs)
              <tbody>
                <tr>
                  <td><img width="200" src="{{Storage::url($rs->product->image)}}" alt=""></td>
                  <td>{{$rs->product->title}}<br>{{$rs->product->description}}<br></td>
                  <td> {{$rs->product->price}} </td>
              
                
                  <td>
					  <form action="{{route('shopcart.update',['id'=> $rs->id])}}" method="post">
						  @csrf
					<input class="span1" name="quantity" value="{{$rs->quantity }}" style="max-width:34px" min="1" max="{{$rs->product->quantity}}" type="number"  onchange="this.form.submit()">
					</form>

				  <div class="input-append">
					  <a a href="{{route('shopcart.destroy',['id'=>$rs->id])}}"
				    <button  class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button> </a>
				
				</div>
				
				</td>
                  <td>{{$rs->product->price * $rs->quantity }} TL</td>
                </tr>
				<tr>




				</tbody>
				@php
				($total += $rs->product->price *  $rs->quantity)
				@endphp
				@endforeach

				<tr>
                  <td colspan="6" class="alignR">Total products:	</td>
                  <td class="label label-primary"> {{$total}} TL</td>
                </tr>
            </table><br>
		
	

            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
		
				</td>
                </tr>
				
			</tbody>
	
				</table>
			<table class="table table-bordered">
			<tbody>

					

						
			

				  </td>
				  </tr>
              </tbody>
            </table>		
	<a href="/" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	
	<form action="{{route('shopcart.order')}}" method="post">
		@csrf
		<input name="total" value="{{$total}}" type="hidden">
	<button type="submit" class="shopBtn btn-large pull-right">Place Order <span class="icon-arrow-right"></span></a>
	</form>
</div>
</div>

@endsection