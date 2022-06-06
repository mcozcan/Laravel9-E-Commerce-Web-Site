@extends('layouts.adminbase')

@section('title', 'Settings')

@section('content')
<center>
        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                 

                <div class="card card-primary card-tabs" style="padding-left:150px;">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings1</a>
                  </li>
       
              
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">


                  <form role="form"  method="post" enctype="multipart/form-data" action="{{route('adminpanel.setting.update')}}">
@csrf
<p>
<label>title <br>
<input type="text" name="title" required>
</label> 
</p>

<p>
<label>keywords <br>
<input type="text" name="title" required>
</label> 
</p>

<p>
<label>description <br>
<textarea name="description" maxlength="500"></textarea>
</label>
</p>

<p>
<label>company <br>
<input type="text" name="company" required>
</label> 
</p>

<p>
<label>adress <br>
<input type="text" name="adress" required>
</label> 
</p>

<p>
<label>phone <br>
<input type="text" name="phone" required>
</label> 
</p>

<p>
<label>fax <br>
<input type="text" name="fax" required>
</label> 
</p>

<p>
<label>email <br>
<input type="text" name="email" required>
</label> 
</p>

<p>
<label>Status<br>
<select name="status">
<option value="" selected="selected">Select One</option>
<option value="True" >True</option>
<option value="False" >False</option>
</select>
</label> 
</p>



<p><button>Submit</button></p>

</form>


                  </div>
                  <div class="tab-pane fade active show" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    
                  <form role="form"  method="post" enctype="multipart/form-data" action="{{route('adminpanel.setting.update')}}">
@csrf


<p>
<label>smtpserver <br>
<input type="text" name="smtpserver" required>
</label> 
</p>

<p>
<label>smtpemail<br>
<input type="text" name="smtpemail" required>
</label> 
</p>

<p>
<label>smtppasword <br>
<input type="text" name="smtppasword">
</label>
</p>
	
<p>
<label>smtpport <br>
<input type="number" name="smtpport">
</label>
</p>



<p><button>Submit</button></p>

</form>



                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                   
                  <form role="form"  method="post" enctype="multipart/form-data" action="{{route('adminpanel.setting.update')}}">
@csrf
<p>
<label>facebook <br>
<input type="text" name="facebook">
</label>
</p>
	
<p>
<label>instagram <br>
<input type="text" name="instagram">
</label>
</p>
	
<p>
<label>youtube <br>
<input type="text" name="youtube">
</label>
</p>

<p>
<label>twitter <br>
<input type="text" name="twitter">
</label>
</p>
	

<p><button>Submit</button></p>

</form>


                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                    

                  <form role="form"  method="post" enctype="multipart/form-data" action="{{route('adminpanel.setting.update')}}">
@csrf

	
<p>
<label>abouts <br>
<textarea name="abouts" maxlength="500"></textarea>
</label>
</p>
<p>
<label>references <br>
<textarea name="references" maxlength="500"></textarea>
</label>
</p>

<p>
<label>contact <br>
<textarea name="contact" maxlength="500"></textarea>
</label>
</p>


<p><button>Submit</button></p>

</form>


                  </div>

                  </div>



                  
                  </div>
       

                </div>
      
        </div>
        </center>
@endsection