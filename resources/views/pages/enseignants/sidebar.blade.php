<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="menu-title">
          <span><i class="fe fe-home"></i>Enseignant</span>
        </li>

        <li class="submenu">
          <a href="#"><span><i style="font-size: 15px;line-height: 20px;margin-right: 5px;vertical-align: top;"
                class="fa-solid fa-users"></i>Profil</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li><a href="{{ route('enseignants.index') }}">Tous les enseignants</a></li>
            <li><a href="{{ route('enseignant.create') }}">Ajouter un enseignant</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('candidatures.list') }}"><span><i
                style="font-size: 15px;line-height: 20px;margin-right: 5px;vertical-align: top;"
                class="fa-solid fa-users-rectangle"></i>Demandes</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>
