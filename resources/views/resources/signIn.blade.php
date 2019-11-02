<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     @include('resources.shared.__head')
</head>

<body class="bg-gradient-yellow-to-green bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

            @php
                $bg_login_img_index = rand(1,10);
                $bg_login_img_class = ' img'.$bg_login_img_index.' ';
            @endphp

              <div class="col-lg-6 d-none d-lg-block bg-login-image {{$bg_login_img_class}}" style="background-size: cover;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">

                        <img src=" {{ asset('img/login-logo.png') }}" style="width: 200px; margin: 0 auto;">

                    </h1>
                  </div>





                  <form class="user" action="/resources/signin" method="post">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                        <label class="custom-control-label" for="remember">Remember Me</label>
                      </div>
                    </div>

                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Login">

                    <hr>

                    <a class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw" style="color:white"></i> Login with Google
                    </a>

                    <a  class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw" style="color:white"></i>  Login with Facebook
                    </a>

                  </form>




                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Olvidaste la contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/resources/signup">Crear una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  @include('resources.shared.__scripts')

</body>

</html>
