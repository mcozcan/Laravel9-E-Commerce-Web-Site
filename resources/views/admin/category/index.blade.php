@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:150px;">
                <div>
                   
                   

                    <h4>
                    <div>
                       <h2>    Category List </h2>
                       <div class="panel-heading">
                       
                       </div>
                       <td><a href="/adminpanel/category/create/"class="btn btn-primary btn-lg">Add Category</a> </td>
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                                           <th>Id</th>
                                           <th>Title</th>
                                           <th>Keywords</th>
                                           <th>Description</th>
                                           <th>Main Category</th>
                                           <th>Image</th>
                                           <th>Status</th>
                                           <th>Show</th>
                                           <th>Edit</th>
                                           <th>Delete</th>
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                                           <td>{{$rs->id}}</td>
                                           <td>{{$rs->title}}</td>
                                           <td>{{$rs->keywords}}</td>
                                           <td>{{$rs->description}}</td>
                                           <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                           <td>
                                           @if ($rs->image) 
                                           <img src="{{Storage::url($rs->image)}}" style="height:50px"style="width:50px">
                                           @endif
                                           </td>
                                         
                                           <td>{{$rs->status}}</td>
                                          
                                           <td><a href="/adminpanel/category/show/{{$rs->id}}/"class="btn btn-success">Show</a> </td>
                                           <td><a href="/adminpanel/category/edit/{{$rs->id}}/" class="btn btn-warning">Edit</a> </td>
                                           <td><a href="/adminpanel/category/destroy/{{$rs->id}}/"class="btn btn-danger">Delete</a> </td>
                                         
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