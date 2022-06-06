@extends('layouts.adminbase')

@section('title', 'Order List')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:150px;">
                <div>
                   
                   

                    <h4>
                    <div>
                       <h2>    Order List </h2>
                       <div class="panel-heading">
                       
                       </div>
                   
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           
                                           <th>ID</th>
                                           <th>Name</th>
                                           <th>Table ID</th>
                                           <th>Price</th>  
                                           <th>Status</th>   
                                           <th>Aprove</th>
                                           <th>Cancel</th>
                                           <th>Show</th>
                   
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                                       <td>{{$rs->id}}</td>
                                       <td>{{$rs->user->name}}</td>
                                       <td>{{$rs->address}}</td>
                                       <td>{{$rs->total}} TL</td>
                                           <td>{{$rs->status}}</td>

                                         
                                           <form role="form"action="/adminpanel/order/aprove/{{$rs->id}}}" enctype="multipart/form-data"  method ="post">
                                               @csrf
                                           <td><button  class="btn btn-success">Aprove</button> </td>
                                           </form>

                                           <form role="form"action="/adminpanel/order/cancel/{{$rs->id}}}" enctype="multipart/form-data"  method ="post">
                                               @csrf
                                           <td><button  class="btn btn-danger">Cancel</button> </td>
                                           </form>
                                           <td><a href="/adminpanel/order/show/{{$rs->id}}/"   class="btn btn-warning">Show</a> </td>
                                         
                                         
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