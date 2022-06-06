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
                                            <td>name</td>
                                            <td>{{$data->name}}</td>
                                         
                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td>{{$data->email}}</td>
                                        
                                        </tr>
                                        <td>role</td>
                                        <td>
                                            @foreach($data->roles as $role)
                                            {{$role->name}}
                                            @endforeach

                                           </td>
                                        <tr>
                                
                                           
                                        </tr>

                               
                                           
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
                    <form role="form"  method="post"  action="{{route('adminpanel.user.addrole',['id'=>$data->id])}}">
                              @csrf            
                                          <p>
                  <label>Role<br>
                  <select name="role_id">
                  
                                           
                                                    
              
                         
                  @foreach($roles as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                  </select>
                  </label> 
                  </p>                  
                                          <p><button>Edit Role</button></p>          
                                          </form>

</body>
</html>
        </div>
        </center>
@endsection