@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

<div>
	<center>
		<h1>Contact Us</h1>
		</center>
	</div>

	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften">	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12006.038282256712!2d32.6555019!3d41.2106646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab3b48ed0392a743!2sKarab%C3%BCk%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1654396310974!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
		{!! $setting->contact !!}
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Email Us</h4>
		<form action="/storemessage" method="post" class="form-horizontal">
			@csrf
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="name" placeholder="name" class="input-xlarge">
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="email"  placeholder="email" class="input-xlarge">
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="subject" placeholder="subject" class="input-xlarge">
          
          </div>
          <div class="control-group">
              <textarea rows="3" name="message" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Send email</button>

        </fieldset>
      </form>
		</div>
	</div>

	
</div>

		

  
@endsection