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
        <a class="nav-link active" href="#">Activation <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    {{ Form::open(array('url' => 'reg_member')) }}
    <div class="form-group col-xs-6">
        {{ Form::label('soc_id', 'Society Number:') }}
        {{ Form::text('soc_id',null,array('class'=>'form-control','placeholder'=>'Get Society Number from Secretary')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_maint_no', 'Maintenance Number:') }}
        {{ Form::text('m_maint_no',null,array('class'=>'form-control','placeholder'=>'Enter Maintenance Number written on Bill')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_name', 'Full Name:') }}
        {{ Form::text('m_name',null,array('class'=>'form-control','placeholder'=>'Enter Full Name')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_email', 'Email:') }}
        {{ Form::email('m_email',null,array('class'=>'form-control','placeholder'=>'Enter Email')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_password', 'Password:') }}
        {{ Form::password('m_password',array('class'=>'form-control','placeholder'=>'************')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_cel_no', 'Mobile Number:') }}
        {{ Form::tel('m_cel_no',null,array('class'=>'form-control','placeholder'=>'Enter 10 digit number')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_wing', 'Wing:') }}
        {{ Form::text('m_wing',null,array('class'=>'form-control','placeholder'=>'Enter Wing')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_flat_no', 'Flat No:') }}
        {{ Form::text('m_flat_no',null,array('class'=>'form-control','placeholder'=>'Enter Flat Number')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_address', 'Address:') }}
        {{ Form::text('m_address',null,array('class'=>'form-control','placeholder'=>'Enter Full Address')) }}
    </div>
    <div class="form-group col-xs-6">
        {{ Form::label('m_pan_card', 'PAN Card Number:') }}
        {{ Form::text('m_pan_card',null,array('class'=>'form-control','placeholder'=>'Enter PAN Card Number')) }}
    </div>
    {{ Form::token() }}
    {{ Form::submit('Register',array('class'=>'btn btn-dark')) }}
    {{ Form::close() }}
    </div>

    @include('scripts')
  </body>
</html>