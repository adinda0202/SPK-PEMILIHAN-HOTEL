<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

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

    .register-box {
      width: 400px;
      margin: 7% auto;
      background: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .register-logo a {
      color: #333;
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .register-card-body {
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

    .icheck-primary label {
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .register-box-msg {
      margin-bottom: 30px; /* Menambahkan jarak antara teks register dan kolom input */
    }

    .checkbox-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 40px; /* Menambahkan jarak antara checkbox dan tombol register */
    }

    a {
      color: #007bff;
    }

    a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full name" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div>

        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="{{ asset('login/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('login/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('login/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
