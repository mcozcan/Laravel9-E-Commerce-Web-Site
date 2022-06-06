@extends('layouts.frontbase')

@section('title', 'Home Page')

@section('content')

<div>
	<center>
		<h1></h1>
		</center>
	</div>

	<div class="row">
		<div class="span8">
		 

		  <p>
		  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h2>FAQ</h2>
<p>.</p>

<button class="accordion">Question 1</button>
<div class="panel">
  <p>Can we make a reservation?</p>
  <p>Yes of course</p>
</div>

<button class="accordion">Question 2</button>
<div class="panel">
<p>What animal meat do you use?</p>
  <p>we use daan meat 100% halal</p>
</div>

<button class="accordion">Question 3</button>
<div class="panel">
<p>Are the teas free?</p>
  <p>First tea is free, later teas are paid</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


		  </p>
		</div>
		<div class="span4">

		</div>
	</div>


		

  
@endsection