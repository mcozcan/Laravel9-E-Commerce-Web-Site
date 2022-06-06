@extends('layouts.frontbase')

@section('title', 'Comments')

@section('content')

<div class="span9">
<div class="alignL" stlye="width:auto;height:150px"  >
	
    <a href="/userpanel"><span class="icon-user"></span>{{Auth::user()->name}}</a> 
    
                    <a class="active"  href="/"> <span class="icon-home" ></span> Home</a> 
                                    
                                    <a href="/userpanel/orders"><span class="icon-shopping-cart"></span>My Orders</a> 
                                    <a href="{{route('userpanel.reviews')}}"><span class="icon-edit"></span> My Reviews </a> 
    <br>
    <br>
    <div class="input-checkbox" style="width:auto">
 
<h2>    My Reviews </h2>
                       <div class="panel-heading">
                       
                       </div>
               
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                                           <th>Id</th>
                                           <th>Name</th>
                                           <th>Project</th>
                                           <th>Subject</th>
                                           <th>Review</th>
                                           <th>Rate</th>
                                           <th>Status</th>
                                           <th>Delete</th>
                                  
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($comments as $rs)
                                       <tr class="success">
                                           <td>{{$rs->id}}</td>
                                           <td>{{$rs->user->name}}</td>
                                           <td>{{$rs->product->title}}</td>
                                           <td>{{$rs->subject}}</td>
                                           <td>{{$rs->review}}</td>
                                           <td>{{$rs->rate}}</td>
                                           <td>{{$rs->status}}</td>
                                         
                                         
                                         
                                          
                                          
                       
                                           <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}"class="btn btn-danger">Delete</a> </td>
                                         
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
</div>
@endsection