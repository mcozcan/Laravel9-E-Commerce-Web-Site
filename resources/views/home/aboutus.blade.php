@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

<div>
	<center>
		<h1>About us</h1>
		</center>
	</div>

	<div class="row">
		<div class="span8">
		 

		  <p>
			{!! $setting->abouts !!}
		  </p>
		</div>
		<div class="span4">

		</div>
	</div>


		

  
@endsection