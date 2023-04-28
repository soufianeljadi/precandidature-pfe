<header class="header-eight min-header">
  <div class="header-fixed header-fixed-wrap">
    <nav class="navbar navbar-expand-lg header-nav header-nav-eight">
      <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
          <span class="bar-icon bar-icon-eight">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>
        <a href="{{ url('/') }}" class="navbar-brand navbar-brand-eight logo">
          <img src="{{ asset('assets/img/estfbs_test1.png') }}" class="img-fluid" alt="Logo">
        </a>
      </div>
      <div class="main-menu-wrapper main-menu-wrapper-eight">
        <div class="menu-header menu-header-eight">
          <a href="{{ url('/') }}" class="menu-logo">
            <img src="{{ asset('assets/img/estfbs_test1.png') }}" class="img-fluid" alt="Logo">
          </a>
          <a id="menu_close" class="menu-close" href="javascript:void(0);">
            <i class="fas fa-times"></i>
          </a>
        </div>
        <ul class="main-nav main-nav-eight">
          <li class="active has-submenu">
            <a href="#accueil">Accueil</a>
          </li>
          <li class=" has-submenu">
            <a href="#procedure">Procédure</a>
          </li>
          <li class=" has-submenu">
            <a href="#">Étudiant<i class="fas fa-chevron-circle-down"></i></a>
            <ul class="submenu">
              <li><a href="{{ route('etudiant.registerForm') }}">Créer nouveau compte </a></li>
              <li><a href="{{ route('etudiant.loginForm') }}">ِConnextion</a></li>
            </ul>
          </li>
          <li class=" has-submenu">
            <a href="{{ route('usms.loginForm') }}">Administrateur</a>
          </li>
          <li class=" has-submenu">
            <a href="#contact">Contactez nous</a>
          </li>
        </ul>
      </div>
      <ul class="nav header-navbar-rht header-navbar-rht-eight">
        <li class="nav-item">
          <a class="nav-link btn btn-register" href="{{ url('/selection') }}"><i class="fas fa-lock"></i>CONNEXION</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link btn btn-login" href="login.html"><i class="fas fa-lock"></i> Sign in</a>
        </li> --}}
      </ul>
    </nav>
  </div>
</header>
