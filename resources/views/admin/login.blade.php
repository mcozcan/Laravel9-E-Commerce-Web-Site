
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>




<center>

<body class="body-Login-back">
  
<img src="{{asset('assets')}}/img/ss.jpg" style="height:300px;width:500px; " alt="">
<img src="{{asset('assets')}}/img/logo-bootstrap-shoping-cart.png" style="height:200px ;width:300px" alt="">
<img src="{{asset('assets')}}/img/ap.jpg" style="height:300px;width:400;top:left " alt="">
<form role="form"  method="post"  action="/loginadmincheck" enctype="multipart/form-data" >
@csrf
<p>
<h3>Admin Login</h3><br>
<label>E-posta<br>
<input type="email" name="email"  style='width: 200px;' required>
</label> 
</p>

<p>
<label>Passwords <br>
<input type="password" name="password" style='width: 200px;'  >
</label>
</p>
	






<p><button type="login" class="btn btn-success">Login Admin</button></p>

</form>

</body>
</center>
</html>
