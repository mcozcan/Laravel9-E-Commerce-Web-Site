@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h2>Show Comment: {{$data->title}}</h2>
                 
                </div>

                
            <hr>

</head>
<body >
<div class="panel panel-default"  >
                        <div class="panel-heading";>
                            
                        </div>
                        <div class="panel-body">
                             
                                         
                                        
                                          
                                           
                                           
                        
                            <div class="table-responsive" style="width: 64%;">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Comment Details</th>
                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$data->id}}</td>
                                         
                                        </tr>
                                        <tr>
                                            <td>Subject</td>
                                            <td>{{$data->subject}}</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>Comment</td>
                                            <td>{{$data->review}}</td>
                                           
                                        </tr>

                                        <tr>
                                                <td>IP</td>
                                            <td>{{$data->IP}}</td>
                                           
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