@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

<div>
	<center>
		<h1>References</h1>
		</center>
	</div>

	<div class="row">
		<div class="span8">
		 

		  <p>
			{!! $setting->references !!}
			<img src="{{asset('assets')}}/img/ref.jpg" style="height:500px ;width:700" alt="">
		  </p>
		</div>
		<div class="span4">

		</div>
	</div>


		

  
@endsection