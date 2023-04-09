<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="menu-title ">
          <span class="text-info"><i class="fa-solid fa-graduation-cap"></i>Etudiant Dashboard</span>
        </li>
        <li class="">
          <a href="{{ route('etudiant.dashboard') }}"><span><i
                style="    font-size: 15px;
            line-height: 20px;
            margin-right: 5px;
            vertical-align: top;"
                class="fa-solid fa-house"></i>Acceuil</span></a>
        </li>

        <li>
          <a href="{{ route('etudiant.profile') }}"> <span><i
                style="    font-size: 15px;
            line-height: 20px;
            margin-right: 5px;
            vertical-align: top;"
                class="fa-solid fa-user"></i>Profile</span></a>
        </li>
        <li>
          <a href="{{ route('avislicencespro') }}"><span><i
                style="    font-size: 15px;
            line-height: 20px;
            margin-right: 5px;
            vertical-align: top;"
                class="fa-solid fa-book-open"></i>Formations</span></a>
        </li>
        <li>
          <a href="{{ route('etudiant.candidature') }}"><span><i
                style="    font-size: 15px;
            line-height: 20px;
            margin-right: 5px;
            vertical-align: top;"
                class="fa-solid fa-list"></i>Mes Candidatures</span></a>
        </li>


        {{-- <li class="submenu">
          <a href="#"><span>Candidatures</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li><a href="#"> Mes Candidature </a></li>
            <li><a href="#"> Ajouter une Candidature </a></li>


          </ul>
        </li> --}}




      </ul>



    </div>
  </div>
</div>
