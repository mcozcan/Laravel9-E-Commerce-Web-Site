@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid" style="padding-left:80px;">
                <div>
                   
                   

                    <h4>
                    <div >
                  <h2>Product List</h2>
                       <div class="panel-heading" style="width:100%">
                          
                       </div>
                       <td><a href="/adminpanel/product/create/"class="btn btn-primary btn-lg">Add Prodcut</a> </td>
                       <div class="panel-body " >
                           <div class="table-responsive">
                               <table class="table"  >
                                   <thead>
                                       <tr>
                                           
                                           <th>Id</th>
                                           <th>cat_id</th>
                                           <th>Title</th>
                                           <th>Price</th>
                                           <th>Quantitiy</th>
                                     
                                           <th>Keywords</th>
                                           <th>Description</th>
                                         
                                           <th>Image</th>
                                           <th>Status</th>
                                           <th>Img</th>
                                           <th>Show</th>
                                           <th>Edit</th>
                                           <th>Delete</th>
                                           


                                     
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($data as $rs)
                                       <tr class="success">
                                           <td>{{$rs->id}}</td>
                                           <td>{{$rs->category_id}}</td>
                                           <td>{{$rs->title}}</td>
                                           <td>{{$rs->price}}</td>
                                           <td>{{$rs->quantitiy}}</td>
                                         
                                      
                                          
                                           <td>{{$rs->keywords}}</td>
                                           <td>{{$rs->description}}</td>
                                        
                                           <td>
                                           @if ($rs->image) 
                                           <img src="{{Storage::url($rs->image)}}" style="height:50px"style="width:50px">
                                           @endif
                                           </td>
                                         
                                           <td>{{$rs->status}}</td>
                                           <td><a href="{{Route('adminpanel.image',['pid'=>$rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width =1200 height=800')"
                                           class="btn btn-success">Img
                                            

                                           </a> </td>

                                           <td><a href="/adminpanel/product/show/{!! $rs->id !!}/"class="btn btn-success">Show</a> </td>
                                           <td><a href="/adminpanel/product/edit/{!! $rs->id !!}/" class="btn btn-warning">Edit</a> </td>
                                           <td><a href="/adminpanel/product/destroy/{!! $rs->id !!}/"class="btn btn-danger">Delete</a> </td>
                                            
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