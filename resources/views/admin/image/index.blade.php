@extends('layouts.adminwindows')

@section('title', 'Product Image List')

@section('content')
<center>


<form role="form"  method="post" enctype="multipart/form-data" action="{{route('adminpanel.image.store',['pid'=>$product->id])}}">
@csrf
<p>
<label>Title <br>
<input type="text" name="title" required>
</label> 
</p>


  <label >Select image:</label>
  <input type="file" name="image">


<p><button>Submit</button></p>

</form>

        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                   
                   

                    <h4>
                    <div class="panel panel-default" style="width:80%;">
                       
                       <div class="panel-heading">
                           Prodcut List
                       </div>
                       
                       <div class="panel-body " style="width: 75%;">
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
             
                                           <th>Title</th>

                                           <th>Image</th>

                                           <th>Delete</th>
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($images as $rs)
                                       <tr class="success">
                                        
                                           <td>{{$rs->title}}</td>
                               
                                           <td>
                                           @if ($rs->image) 
                                           <img src="{{Storage::url($rs->image)}}" style="height:50px"style="width:50px">
                                           @endif
                                           </td>
                                         
                                  
                                         
                                           <td><a href="{{route('adminpanel.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}/"class="btn btn-danger">Delete</a> </td>
                                            
                                           @endforeach
                                       </tr>
                                       
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                    </h4>


                    
                </div>
            <hr>
        </div>
        </center>
@endsection