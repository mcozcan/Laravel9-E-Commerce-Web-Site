<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('head')
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{asset('assets')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="{{asset('assets')}}/css/font-awesome-ie7.min.css" rel="stylesheet">
		<!--[if IE 7]>
	
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/ico/favicon.ico">
  </head>
<body style="background-image: url('/img/white_leather.png')">
  <div class="container">
    @include("home.header")
    @show
    <div class="row">
      @include("home.sidebar")
      @yield('content')
    </div>
    @include("home.footer")
    @yield('foot')
</div>
</body>
</html>