<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="menu-title ">
          <span class="text-info"><i class="fe fe-home"></i>Etudiant Dashboard</span>
        </li>
        <li class="">
          <a href="{{ route('etudiant.dashboard') }}"><span>Acceuil</span></a>
        </li>

        <li>
          <a href="{{ route('etudiant.profile') }}"><span>Profile</span></a>
        </li>
        <li>
          <a href="{{ route('avislicencespro') }}"><span>Formations</span></a>
        </li>
        <li>
          <a href="{{ route('etudiant.candidature') }}"><span>Mes Candidatures</span></a>
        </li>


        <li class="submenu">
          <a href="#"><span>Candidatures</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li><a href="#"> Mes Candidature </a></li>
            <li><a href="#"> Ajouter une Candidature </a></li>


          </ul>
        </li>




      </ul>



    </div>
  </div>
</div>
