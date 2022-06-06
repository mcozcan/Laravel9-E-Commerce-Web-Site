<!-- Upper Header-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-instagram"></span></a>
				</div>
			
				<a class="active" href="/"> <span class="icon-home"></span> Home</a> 
				@auth()
				<a href="/userpanel"><span class="icon-user"></span> {{Auth::user()->name}}</a> 
				<a href="/adminpanel"><span class="icon-user"></span> AdminPanel</a> 
				<a href="/logoutuser"><span class="fa fa-times"></span> Logout </a> 
				@else
				<a href="/loginuser"><span class="icon-user"></span>Login</a> 
				<a href="/registeruser"><span class="icon-edit"></span> Free Register </a> 
				@endauth
		
				<a href="/contactus"><span class="icon-envelope"></span> Contact us</a>
				<a href="/aboutus"><span class="icon-quote-right"></span> About Us</a>
				<a href="/references"><span class="icon-star"></span> References</a>
				<a href="/faq"><span class=" icon-retweet"></span>FAQ</a> 
				<a href="/shopcart"><span class="icon-shopping-cart"></span> {{\App\Http\Controllers\ShopCartController::countshopcart()}} Item(s) - <span class="badge badge-warning"></span></a>
			</div>
		</div>
	</div>
</div>
<!--Lower Header-->
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="/"><span></span> 
		<img src="{{asset('assets')}}/img/logo-bootstrap-shoping-cart.png" style="height:150px ;width:220px" alt="">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	Reasonable Price High Quality

	</h1>
	</div>
	</div>
	
	<div class="span4 alignR">
	<img src="{{asset('assets')}}/img/pngwing.com.png" style="height:110px ;width:200" alt="">
	<p><br> <strong>  </strong><br><br></p>


	</div>
</div>
</header>