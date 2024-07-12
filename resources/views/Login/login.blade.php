<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('login/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('login/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('login/dist/css/adminlte.min.css') }}">
  <!-- Custom style -->
  <style>
    body {
      background: url('https://images7.alphacoders.com/362/362619.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Source Sans Pro', sans-serif;
    }

    .login-box {
      width: 400px;
      margin: 7% auto;
      background: rgba(255, 255, 255, 0.8);
      padding: 30px; /* Ubah padding untuk menyesuaikan ukuran kotak */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .login-logo a {
      color: #333;
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .login-card-body {
      background: transparent;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .form-control {
      border-radius: 0;
      transition: box-shadow 0.3s;
    }

    .form-control:focus {
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .input-group-text {
      border-radius: 0;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .login-box-msg {
      margin-bottom: 20px; /* Menambahkan jarak antara teks login dan kolom email */
    }

    .social-auth-links .btn {
      margin-bottom: 10px; /* Menambahkan margin bawah pada tombol sosial */
    }

    a {
      color: #007bff;
    }

    a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .error-message {
      color: red;
      font-size: 0.875rem;
      margin-top: 5px;
      text-align: left;
    }
  </style>
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan login untuk masuk</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <small class="error-message">{{ $message }}</small>
        @enderror

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <small class="error-message">{{ $message }}</small>
        @enderror

        <div class="row">
          <div class="col mb-2">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
        </div>
      </form>

      
      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="{{ route('register') }}" class="btn btn-block btn-secondary">Registrasi</a>
        <a href="{{ route('login.facebook') }}" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Masuk Facebook
        </a>
        <a href="{{ route('login.google') }}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Masuk Google+
        </a>
      </div>
      <!-- /.social-auth-links --> --}}

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('login/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('login/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('login/dist/js/adminlte.min.js') }}"></script>

@if ($message = Session::get('success'))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: '{{ $message }}',
      confirmButtonText: 'OK'
    });
  </script>
@endif

@if ($message = Session::get('failed'))
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Login Gagal!',
      text: '{{ $message }}',
      confirmButtonText: 'OK'
    });
  </script>
@endif

</body>
</html>
