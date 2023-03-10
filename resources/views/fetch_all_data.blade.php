<?php 
if(Session::has('user')){
    $userData= Session::get('user');
}
 //dd($userData);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hello</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">Get Car</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Link</a>
            </li>
            @if(isset($userData))
            <li class="nav-item active">
              <a class="nav-link" href="#">Hi. <span style="color: crimson">{{$userData->name}}</span> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link btn btn-danger" href="{{route('logout')}}">Logout</a>
            </li>
            @endif
          </ul>
        </div>
      </nav>
 
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Car Number</th>
                    <th scope="col">Driver Phone</th>
                    <th scope="col">Lng / lat</th>
                    <th scope="col">Map</th>
                    <th scope="col">Query</th>
                    <th scope="col">Sos Aleart</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($sos as $val)
                  <tr>
                    <th scope="row">gg</th>
                    <td>ff</td>
                    <td> ff</td>
                    <td>{{$val->value}}</td>
                    <td><a href="https://www.google.com/maps/place/" target="_blank" rel="noopener" class="btn btn-success">Get in Map</a></td>
                    <td><a href="" class="btn btn-success">Click Query</a></td>
                    <td>
                      {{-- @if($val->value =='ON')
                        <p class="btn btn-success">{{$val->value}}</p>
                        @else 
                        <p class="btn btn-danger">{{$val->value}}</p>
                        @endif --}}
                        @if($val->value=="ON")
                        <a class="btn btn-success" href=""> {{$val->value}}</a>
                        @else
                        <a class="btn btn-danger" href="">{{$val->value}} </a>
                        @endif
                    </td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
        </div> 
    </div>
    
</script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
  </body>
</html>