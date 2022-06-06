@extends('layouts.adminbase')

@section('title', 'Comment Show')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:150px;">
                <div>
                   
                   

                    <h4>
                    <div>
                       <h2>    Comment List </h2>
                       <div class="panel-heading">
                       
                       </div>
                       <td><a href="/adminpanel/category/create/"class="btn btn-primary btn-lg">Add Category</a> </td>
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                                       <th>ID</th>
                                           <th>Product name</th>
                                           <th>name</th>
                                           <th>Subject</th>
                                           <th>Comment</th>
                                           <th>Rate</th>   

                                           <th>Show</th>
                                           <th>Delete</th>
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                                       <td>{{$rs->id}}</td>
                                       <td>{{$rs->product->title}}</td>
                                           <td>{{$rs->user->name}}</td>
                                           <td>{{$rs->subject}}</td>
                                           <td>{{$rs->review}}</td>

                                         
                                           <td>{{$rs->rate}}</td>
                                          
                                           <td><a href="/adminpanel/comment/show/{{$rs->id}}/"class="btn btn-success">Show</a> </td>
                                           <td><a href="/adminpanel/comment/destroy/{{$rs->id}}/"class="btn btn-danger">Delete</a> </td>
                                         
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