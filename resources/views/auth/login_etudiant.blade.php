<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Login - Espace Etudiant </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/favicon_usms.ico') }}" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/etudiant.css') }}">


</head>

<body class="account-page">

  <!-- Main Wrapper -->
  <div class="main-wrapper">


    <!-- Page Content -->
    <div class="bg-pattern-style">
      <div class="content">

        <!-- Login Tab Content -->
        <div class="account-content">
          <div class="account-box">
            <div class="login-right">
              <div class="login-header">
                @if (Session::has('error'))
                  <li class="alert alert-danger">{{ Session::get('error') }}</li>
                @endif
                <h3>Login <span>Espace Etudiant</span></h3>
                {{-- <p class="text-muted">Access to our dashboard</p> --}}
              </div>
              <form method="POST" action="{{ route('login.etudiant') }}">
                @csrf
                <input type="hidden" name="type" value="etudiant">
                <div class="form-group">
                  <label class="form-control-label">Email Address</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Password</label>
                  <div class="pass-group">
                    <input type="password" class="form-control pass-input" name="password">
                    <span class="fas fa-eye toggle-password"></span>
                  </div>
                </div>
                <div class="text-end">
                  <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                </div>
                <button class="btn btn-primary login-btn" type="submit">Login</button>
                <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
              </form>
            </div>
          </div>
        </div>
        <!-- /Login Tab Content -->

      </div>

    </div>
    <!-- /Page Content -->

  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

</body>

</html>
