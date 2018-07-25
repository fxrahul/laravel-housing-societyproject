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
    <br>
    <center><h3>You have been Successfully Registered!! Go to <a href="{{url('log')}}">Login Page</a></h3></center>

    @include('scripts')
  </body>
</html>