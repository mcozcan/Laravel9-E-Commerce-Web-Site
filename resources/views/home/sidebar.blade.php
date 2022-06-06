<div id="sidebar" class="span3">
<div class="well well-small">
	@php
	$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
	@endphp
	<div>
	<li><a href="/"><span class="icon-chevron-right"></span>Home</a></li>
	@foreach($mainCategories as $rs)
	<ul class="nav nav-list">
	
		<li><a href="{{route('categoryproduct',['id'=>$rs->id])}}"><span class="icon-chevron-right"></span>{{$rs->title}}</a></li>
		

		
	</ul>
	@endforeach
	</div>


			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/product/9" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{asset('assets')}}/img/pWVZI5rW4Ze3TKrvQYiQxTHN3gB3zltcDq7MbCUk.jpg" style="width:150px;height:150px" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h5><a class="defaultBtn" href="/product/9">Soguk Baklava</a> <span class="pull-right">59 ₺</span></h5>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/product/5" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{asset('assets')}}/img/4JHvV5N5uuQ326Kxb4x7KBDmcI3jD8hBJcWfTtyt.jpg" style="width:150px;height:150px" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h5><a class="defaultBtn" href="/product/5">Adana Kebap</a> <span class="pull-right">49 ₺</span></h5>
				</div>
			  </div>
			</li>
			
			<li style="border:0"> &nbsp;</li>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/product/4" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{asset('assets')}}/img/WUvbSfV9S5li4y9L5d9bm9JnL7DnA0E0fyVtx1Dw.jpg" style="width:150px;height:150px" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h5><a class="defaultBtn" href="/product/4">Döner</a> <span class="pull-right">49 ₺</span></h5>
				</div>
			  </div>
			</li>
	
			
			
		
	</ul>
</div>

			<br>
			<br>
			
		
		 
	</div>