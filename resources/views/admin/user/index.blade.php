@extends('layouts.adminbase')

@section('title', 'User')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:150px;">
                <div>
                   
                   

                    <h4>
                    <div>
                       <h2>    User </h2>
                       <div class="panel-heading">
                       
                       </div>
 
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                        
                                           <th>Name</th>
                                           <th>email</th>
                                           <th>Role</th>     
                                           <th>Show</th>
                                           <th>Delete</th>
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                          
                              
                                           <td>{{$rs->name}}</td>
                                           <td>{{$rs->email}}</td>
                                           <td>
                                            @foreach($rs->roles as $role)
                                            {{$role->name}}
                                            @endforeach

                                           </td>
                            

                                         
                                         
                                          
                                           <td><a href="/adminpanel/user/show/{{$rs->id}}/"class="btn btn-success">Show</a> </td>
                                           <td><a href="/adminpanel/user/destroy/{{$rs->id}}/"class="btn btn-danger">Delete</a> </td>
                                         
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