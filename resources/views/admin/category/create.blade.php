@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h2>Add Category</h2>
                 
                </div>

                
            <hr>

</head>
<body>

<form role="form"  method="post" enctype="multipart/form-data" action="/adminpanel/category/store">
@csrf
<p>
<label>Title <br>
<input type="text" name="title" required>
</label> 
</p>

<p>
<label>Keywords <br>
<input type="text" name="keywords">
</label>
</p>
	
<p>
<label>Description <br>
<textarea name="description" maxlength="500"></textarea>
</label>
</p>

<p>
<label>Main Category<br>
<select name="parent_id">
<option value="0" selected="selected">Parent Category</option>
 @foreach($data as $rs)
 <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
 @endforeach
        
</select>
</label> 
</p>


<p>
<label>Status<br>
<select name="status">
<option value="" selected="selected">Select One</option>
<option value="True" >True</option>
<option value="False" >False</option>
</select>
</label> 
</p>

  <label >Select image:</label>
  <input type="file" name="image">


<p><button>Submit</button></p>

</form>

</body>
</html>
        </div>
        </center>
@endsection