<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> {{ env('APP_NAME') }} - @yield('title', 'Login')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/panel/css/app.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Acessar </b>Painel</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Insira os dados para acessar</p>

        <form action="{{route('login')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input name="email" type="email" autocomplete="username" class="form-control" placeholder="Email">
            <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="password" type="password" autocomplete="current-password" class="form-control" placeholder="Password">
            <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Lembrar-me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>



        {{-- <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div> --}}
        <!-- /.social-auth-links -->
        @if(Route::has('password.request'))
        <p class="mb-1">
          <a href="{{route('password.request')}}">I forgot my password</a>
        </p>
        @endif
        @if(Route::has('register'))
        <p class="mb-0">
          <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
        @endif
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <script src="/panel/js/app.js"></script>

</body>

</html>