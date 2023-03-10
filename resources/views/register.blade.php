<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{route("register.create")}}" method="post">
                              @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            placeholder="Enter Name" value="{{old('name')}}">
                                            @if($errors->has('name'))
                                            <span class="help-block" style="color: #FF0000;">
                                              <i>**{{ $errors->first('name') }}</i>
                                            </span>
                                          @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Enter Phone">
                                            @if($errors->has('phone'))
                                            <span class="help-block" style="color: #FF0000;">
                                              <i>**{{ $errors->first('phone') }}</i>
                                            </span>
                                          @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" value="{{old('email')}}" >
                                        @if($errors->has('email'))
                                        <span class="help-block" style="color: #FF0000;">
                                          <i>**{{ $errors->first('email') }}</i>
                                        </span>
                                      @endif
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" value="{{old('password')}}" placeholder="Password">
                                            @if($errors->has('password'))
                                            <span class="help-block" style="color: #FF0000;">
                                              <i>**{{ $errors->first('password') }}</i>
                                            </span>
                                          @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="confirm_password" placeholder="Confirm  Password">
                                            @if($errors->has('confirm_password'))
                                            <span class="help-block" style="color: #FF0000;">
                                              <i>**{{ $errors->first('confirm_password') }}</i>
                                            </span>
                                          @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                
                            </form>
                            <hr>
                            {{-- <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div> --}}
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
