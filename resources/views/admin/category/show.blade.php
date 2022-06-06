@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h2>Show Category: {{$data->title}}</h2>
                 
                </div>

                
            <hr>

</head>
<body >
<div class="panel panel-default"  >
                        <div class="panel-heading";>
                            İmage
                        </div>
                        <div class="panel-body">
                             
                                         
                                        
                                          
                                           
                                           
                        
                            <div class="table-responsive" style="width: 64%;">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Data Details</th>
                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$data->id}}</td>
                                         
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{$data->title}}</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>Keywords</td>
                                            <td>{{$data->keywords}}</td>
                                           
                                        </tr>

                                        <tr>
                                                <td>Description</td>
                                            <td>{{$data->description}}</td>
                                           
                                        </tr>

                                        <tr>
                                           
                                            @if ($data->image) 
                                           <img src="{{Storage::url($data->image)}}" style="height:150px">
                                           @endif
                                        
                                           
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td>{{$data->status}}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Created Date</td>
                                            <td>{{$data->created_at}}</td>
                                           
                                        </tr>

                                        <tr>
                                            <td>Updated Date</td>
                                            <td>{{$data->updated_at}}</td>
                                           
                                        </tr>
                                  
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</body>
</html>
        </div>
        </center>
@endsection