@extends('layouts.frontbase')

@section('title', 'Order')

@section('content')

<div>
	<center>
	
		</center>
	</div>

	<div class="well well-small">

	<hr class="soften">	
	<div class="row-fluid">
		<div class="span8 relative">
		

		<div class="absoluteBlk">
		<div class="well wellsmall">

		<h5>
	
		</h5>
		</div>
		</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<br>


		<div class="span4">
		<h4>PAYMENT INFORMATION {{$total}} TL</h4>
		<form class="form-horizontal" action="{{route('shopcart.storeorder')}}" method="post">
			@csrf
        <fieldset>
          <div class="control-group">
           
		  <label>PRICE</label>
            
			  <input name="total" value="{{$total}}" type="hidden">
		
			  <input name="name" value="{{Auth::user()->name}}" type="hidden">
			  
          </div>
		   <div class="control-group">
           <label>Card Holder</label>
              <input type="text" placeholder="Card Holder" class="input-xlarge">
           
          </div>
		   <div class="control-group">
           <label>Card Number</label>
              <input type="text" placeholder="Card Number" class="input-xlarge">
          
          </div>
		  <div class="control-group">
           <label>Exp. Date</label>
              <input type="text" placeholder="Exp. Date" class="input-xlarge">
          
          </div>

		  <div class="control-group">
           <label>Security Code</label>
              <input type="text" placeholder="Security Code" class="input-xlarge">
          
          </div>

		  <div class="control-group">
           <label>Table ID:</label>
              <input type="text" placeholder="Table ID" name="address" class="input-xlarge">
          
          </div>

            <button class="shopBtn" type="submit">Complate Order</button>

        </fieldset>
      </form>
		</div>
	</div>

	
</div>

		

  
@endsection