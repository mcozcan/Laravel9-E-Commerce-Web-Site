@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h2>Edit Category: {{$data->title}}</h2>
                 
                </div>

                
            <hr>

</head>
<body>



<form role="form"  method="post"  action="/adminpanel/category/update/{{$data->id}}" enctype="multipart/form-data" >
@csrf
<p>

<label>Title<br>
<input type="text" name="title" value="{{$data->title}}"  style='width: 300px;' required>
</label> 
</p>

<p>
<label>Keywords <br>
<input type="text" name="keywords" style='width: 300px;' value="{{$data->keywords}}">
</label>
</p>
	
<p>
<label>Description <br>

<input type="text" name="description" style='width: 300px;' value="{{$data->description}}">
</label>
</p>


<p>
<label>Status<br>
<select name="status" value="{{$data->status}}" >

<option value="True" >True</option>
<option value="False" >False</option>
</select>
</label> 
</p>

<label>Select image:</label>
  <input type="file" name="image">


<p><button type="submit" class="btn btn-success">Update Data</button></p>

</form>

</body>
</html>
        </div>
        </center>
@endsection