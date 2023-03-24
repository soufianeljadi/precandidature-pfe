<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="HTML5 Template" />
  {{-- <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> --}}
  <title>Login Page</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon_usms.ico') }}" />

  <!-- Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

  <!-- css -->
  {{-- <link href="{{ URL::asset('assets/css/selection.css') }}" rel="stylesheet"> --}}

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>

  <div class="wrapper">

    <section class="height-100vh d-flex align-items-center page-section-ptb login"
      style="min-height:100vh;background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(204,204,204,1) 100%);
      ;">
      <div class="container">
        <div class="row justify-content-center no-gutters vertical-align">
          <div style="border-radius: 15px;" class="col-lg-8 col-md-8 bg-white">
            <h3 class="p-2">Choisir Votre Espace</h3>
            <div class="login-fancy pb-40 clearfix">
              <div class="form-inline" style="display:flex;padding:10px;justify-content: space-between">
                <a class="btn btn-default col-lg-3" title="Etudiant" href="{{ route('login.etudiant') }}">
                  <img alt="user-img" width="100px;" src="{{ URL::asset('admin_assets/img/user/student.png') }}">
                  <p>Espace Etudiant</p>
                </a>
                <a class="btn btn-default col-lg-3" title="Enseignant" href="{{ route('login.enseignant') }}">
                  <img alt="user-img" width="100px;" src="{{ URL::asset('admin_assets/img/user/teacher.png') }}">
                  <p>Espace Enseignant</p>

                </a>
                <a class="btn btn-default col-lg-3" title="Administrateur" href="#">
                  <img alt="user-img" width="100px;" src="{{ URL::asset('admin_assets/img/user/admin.png') }}">
                  <p>Espace Administrateur</p>

                </a>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=================================
 login-->

  </div>
  <!-- jquery -->
  <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <!-- plugins-jquery -->
  <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
  <!-- plugin_path -->
  <script>
    var plugin_path = 'js/';
  </script>


  <!-- toastr -->
  @yield('js')
  <!-- custom -->
  <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
