<!doctype html>
<html lang="en">
    @include('header') 
  <body>
  <br>
  <center>
    <h2>Your Details</h2>
    <p>ID: {{$result->m_id}}</p>
    <p>Society No: {{$result->soc_id}}</p>
    <p>Maintenance Number{{$result->m_maint_no}}</p>
    <p>Name: {{$result->m_name}}</p>
    <p>Email: {{$result->m_email}}&nbsp;<a href="#" class="btn btn-dark">Edit</a></p> 
    <p>Password: {{$result->m_password}}&nbsp;<a href="#" class="btn btn-dark">Edit</a></p>
    <p>Wing: {{$result->m_wing}}</p>
    <p>Flat Number: {{$result->m_flat_no}}</p>
    <p>Address: {{$result->m_address}}</p>
    <p>PAN: {{$result->m_pan_card}}</p>
    <p>Mobile: {{$result->m_cel_no}}</p>
    <p>Parking Amount: {{$result->m_parking_charge}}&nbsp;<a href="#" class="btn btn-dark">Pay</a></p>
    <p>Gas Amount: {{$result->m_gas_charge}}&nbsp;<a href="#" class="btn btn-dark">Pay</a></p>
    <p>Water Amount{{$result->m_water_charge}}&nbsp;<a href="#" class="btn btn-dark">Pay</a></p>
    <p>Light Amount{{$result->m_light_charge}}&nbsp;<a href="#" class="btn btn-dark">Pay</a></p>
    <a href="{{url('lgout')}}" class="btn btn-dark">Logout</a>
  </center>
    @include('scripts')
  </body>
</html>
