@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:180px;">
                <div>
                   
                
              
                                              
  
                                        
                                    
                    <h4>
                    <div >
                  <h2>Product Detail</h2>
                       <div class="panel-heading" style="width:100%">
                          
                       </div>
                    
              
                       <td><a href="/adminpanel/order/new"   class="btn btn-warning">Go Back</a> </td>

                     
                      
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table"  >
                                   <thead>
                                       <tr>
                                           
                                           <th>Id</th>
                                           <th>order_id</th>
                                           <th>product_name</th>
                                           <th>name</th>
                                           <th>Price</th>
                                           <th>Quantitiy</th>

                                           <th>Image</th>
                                           <th>Status</th>
                                           
                                          
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($datalist as $rs)
                                       <tr class="success">
                                           <td>{{$rs->id}}</td>
                                           <td>{{$rs->order_id}}</td>
                                           <td>{{$rs->product->title}}</td>
                                           <td>{{$rs->user->name}}</td>
                                           <td>{{$rs->amount}}</td>
                                           <td>{{$rs->quantity}}</td>
                                         
                                
                                        
                               
                                           <td>
                                      
                                           <img src="{{Storage::url($rs->product->image)}}" style="height:50px;height:50px">
                                         
                                           </td>
                                           <td>{{$rs->status}}</td>
                                           @endforeach
                                     
                                    
                                            

                                           </a> </td>
                                        
                                          
                                         
                                      
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