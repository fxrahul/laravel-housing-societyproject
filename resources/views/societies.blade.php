<!doctype html>
<html lang="en">
    @include('header') 
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Housing Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="#">Society Registration <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    {{ Form::open(array('url' => 'reg_society')) }}
    <div class="form-group col-xs-6">
        {{ Form::label('user_id', 'User Id:') }}
        {{ Form::text('user_id',$id,array('class'=>'form-control')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('s_name', 'Society Name:') }}
        {{ Form::text('s_name',null,array('class'=>'form-control','placeholder'=>'Enter Society Name')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('s_email', 'Society Email:') }}
        {{ Form::email('s_email',null,array('class'=>'form-control','placeholder'=>'Enter Society Email')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('s_address', 'Society Address:') }}
        {{ Form::text('s_address',null,array('class'=>'form-control','placeholder'=>'Enter Email')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('s_account_no', 'Society Account Number:') }}
        {{ Form::text('s_account_no',null,array('class'=>'form-control','placeholder'=>'Enter Society Account No')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('pan_card', 'Society PAN Card No:') }}
        {{ Form::text('pan_card',null,array('class'=>'form-control','placeholder'=>'Enter Society PAN Card No')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('c_tel_no', 'Mobile Number:') }}
        {{ Form::tel('c_tel_no',null,array('class'=>'form-control','placeholder'=>'Enter 10 digit number')) }}
    </div>
    {{ Form::token() }}
    {{ Form::submit('Register Society',array('class'=>'btn btn-dark')) }}
    {{ Form::close() }}
    </div>

    @include('scripts')
  </body>
</html>