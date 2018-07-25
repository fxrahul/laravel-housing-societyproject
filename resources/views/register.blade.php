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
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sign up <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
    {{ Form::open(array('url' => 'reg')) }}
    <div class="form-group col-xs-6">
        {{ Form::label('firstname', 'First Name:') }}
        {{ Form::text('first_name',null,array('class'=>'form-control','placeholder'=>'Enter First Name')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('lastname', 'Last Name:') }}
        {{ Form::text('last_name',null,array('class'=>'form-control','placeholder'=>'Enter Last Name')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email',null,array('class'=>'form-control','placeholder'=>'Enter Email')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('mobile_number', 'Mobile Number:') }}
        {{ Form::tel('mobile_number',null,array('class'=>'form-control','placeholder'=>'Enter 10 digit number')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password',array('class'=>'form-control','placeholder'=>'************')) }}
    </div>
    {{ Form::token() }}
    {{ Form::submit('Register',array('class'=>'btn btn-dark')) }}
    {{ Form::close() }}
    </div>

    @include('scripts')
  </body>
</html>