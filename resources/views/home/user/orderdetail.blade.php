@extends('layouts.frontbase')

@section('title', 'User Order Detail')

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
			  @foreach($orderproducts as $rs)
              <tbody>
                <tr>
                  <td><img width="200" src="{{Storage::url($rs->product->image)}}" alt=""></td>
                  <td>{{$rs->product->title}}<br>{{$rs->product->description}}<br></td>
                  <td> {{$rs->product->price}} </td>
              
                
                  <td>
				  <label>{{$rs->quantity }}</label>
					  

			
				
				</td>
                  <td>{{$rs->amount}} TL</td>
                </tr>
				<tr>


				@php
				($total += $rs->product->price *  $rs->quantity)
				@endphp

				</tbody>
	
				@endforeach

				<tr>
                  <td colspan="6" class="alignR">Total price:	</td>
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

	</form>
</div>
</div>

@endsection