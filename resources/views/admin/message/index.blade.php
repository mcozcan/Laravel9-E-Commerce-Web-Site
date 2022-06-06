@extends('layouts.adminbase')

@section('title', 'Message Show')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:150px;">
                <div>
                   
                   

                    <h4>
                    <div>
                       <h2>    Comment List </h2>
                       <div class="panel-heading">
                       
                       </div>
                  
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                                       <th>ID</th>
                                         
                                           <th>Name</th>
                                           <th>email</th>   
                                           <th>Subject</th>
                                           <th>Message</th>
                                           

                                   
                                           
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                                       <td>{{$rs->id}}</td>
                                       <td>{{$rs->name}}</td>
                                           <td>{{$rs->email}}</td>
                                           <td>{{$rs->subject}}</td>
                                           <td>{{$rs->message}}</td>

                                         
                                       
                                          
                                     
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