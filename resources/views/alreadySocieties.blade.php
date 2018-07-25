<!doctype html>
<html lang="en">
    @include('header') 
  <body>
  <br>
  <center>
    <h2> Society Details:</h2><br>
    <h3>Society No:</h3>{{$s_id}}<br>
    <h3>Society Name:</h3>{{$s_name}}<br>
    <a class="btn btn-dark" href="../dash/{{$s_id}}" role="button">Go to Dashboard</a>
  </center>
    @include('scripts')
  </body>
</html>