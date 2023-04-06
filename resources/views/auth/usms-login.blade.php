<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>USMS - Connexion Espace Administratif</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/estfbs-ico.png') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/font-awesome.min.css') }}">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        <div class="loginbox">
          <div class="login-left">
            <img style="border-radius: 5px;box-shadow: 10px 9px 10px 1px #2196F3;" class="img-fluid"
              src="{{ asset('assets/img/logos/estfbs-305x107 2.png') }}" alt="Logo">
          </div>
          <div class="login-right">
            <div class="login-right-wrap">
              <h1>Authentification </h1>
              <p class="account-subtitle">Plateforme de pré-candidature aux formations licences professionnelles</p>
              @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ Session::get('error') }}
                  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              @endif
              <!-- Form -->
              <form action="{{ route('login.etudiant') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <select name="type" class="form-control">
                    <option disabled selected>Type du compte</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="administrateur">Administrateur</option>
                  </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block w-100" type="submit">Login</button>
                </div>

              </form>
              <!-- /Form -->

              {{-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
              <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">or</span>
              </div> --}}

              <!-- Social Login -->
              {{-- <div class="social-login">
                <span>Login with</span>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i
                    class="fa fa-google"></i></a>
              </div> --}}
              <!-- /Social Login -->

              {{-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('admin_assets/js/jquery-3.6.0.min.js') }}"></script>

  <!-- Bootstrap Core JS -->
  <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Feather Icon JS -->
  <script src="{{ asset('admin_assets/js/feather.min.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('admin_assets/js/script.js') }}"></script>

</body>

</html>
