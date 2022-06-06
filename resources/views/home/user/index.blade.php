@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

<div class="span9" >
<br>
<br>
<div class="alignL" stlye="width:auto;height:150px"  >
	
<a href="#"><span class="icon-user"></span>{{Auth::user()->name}}</a> 

				<a class="active"  href="/"> <span class="icon-home" ></span> Home</a> 
								
								<a href="/userpanel/orders"><span class="icon-shopping-cart"></span>My Orders</a> 
								<a href="{{route('userpanel.reviews')}}"><span class="icon-edit"></span> My Reviews </a> 
<br>
<br>
<div class="input-checkbox" style="width:auto">
								@include('profile.show')
				</div>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
</div>
</div>
</div>
@endsection