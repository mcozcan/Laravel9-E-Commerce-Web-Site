@extends('layouts.adminbase')

@section('title', 'Edit Product :'.$data->title)

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                <h2>Edit Product: {{$data->title}}</h2>                 
                </div>

                
            <hr>

</head>
<body>



<form role="form"  method="post"  action="/adminpanel/product/update/{{$data->id}}" enctype="multipart/form-data" >
@csrf

<p>

<label>Title<br>
<input type="text" name="title" value="{{$data->title}}"  style='width: 300px;' required>
</label> 
</p>

<p>
<label>Price<br>
<input type="number" name="price" value="{{$data->price}}"  style='width: 300px;' required>
</label> 
</p>

<p>
<label>Quantity<br>
<input type="number" name="quantitiy" value="{{$data->quantitiy}}"  style='width: 300px;' required>
</label> 
</p>

<p>
<label>Minimum Quantity<br>
<input type="number" name="minquantitiy" value="{{$data->minquantitiy}}"  style='width: 300px;' required>
</label> 
</p>

<p>
<label>Tax %<br>
<input type="number" name="tax" value="{{$data->tax}}"  style='width: 300px;' required>
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
<label>Detail <br>

<input type="text" name="detail" style='width: 300px;' value="{{$data->detail}}">
</label>
</p>

<!--
<p>
<label>Main Category<br>
<select name="category_id">
<option value="0" selected="selected">Main Category</option>
@foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                            </option>
                                        @endforeach
-->
</select>
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