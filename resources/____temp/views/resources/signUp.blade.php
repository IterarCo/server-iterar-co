<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     @include('resources.shared.__head')
</head>

<body class=" bg-gradient-yellow-to-green bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">


           @php
                $bg_login_img_index = rand(1,10);
                $bg_login_img_class = ' img'.$bg_login_img_index.' ';
            @endphp

             <div class="col-lg-5 d-none d-lg-block bg-register-image {{$bg_login_img_class}}" style="background-size: cover;"></div>

          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><img src=" {{ asset('img/login-logo.png') }}" style="width: 200px; margin: 0 auto;"></h1>
              </div>
              <form class="user" action="/resources/signup" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="first_name" name="first_name" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="last_name" name="last_name" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="repassword" name="repassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input class="btn btn-primary btn-user btn-block" type="submit" value="Crear Cuenta Nueva">
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Olvidaste la contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="/resources/signin">¿Ya tienes una cuenta? Ingresar!</a>
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
