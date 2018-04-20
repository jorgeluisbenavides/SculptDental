<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sculpt Dental </title>

    <!-- Bootstrap -->
    <link href=" {{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('vendor/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{ asset('vendor/nprogress/nprogress.css') }} " rel="stylesheet">
    <!-- Animate.css -->
    <link href=" {{ asset('vendor/animate.css/animate.min.css') }} " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{ asset('build/css/custom.min.css') }} " rel="stylesheet">
  </head>

  <body class="login" style="background-color: white">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <h1>Bienvenido</h1>
              <div class="login-logo">
                <img src=" {{ asset('img/logos/logo_login.png') }} " class="rounded mx-auto d-block" width="170" height="170">
              </div>    
              <br>          
              <div>
                <input id="email" type="email" class="form-control" name="email" placeholder="Usuario" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <button type="submit" class="btn btn-default">
                  Entrar           
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Administracion de Sculpt Dental
                  <a href="{{ route('register') }}">Register</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-stethoscope"></i> Sculpt Dental </h1>
                  <p>©2018 All Rights Reserved. Privacy and Terms.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
