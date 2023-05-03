<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="menu-title">
          <span><i class="fe fe-home"></i>Enseignant</span>
        </li>


        <li>
          <a href="{{ route('enseignant.dashboard') }}"><span><i
                style="font-size: 15px;line-height: 20px;margin-right: 5px;vertical-align: top;"
                class="fa-solid fa-chart-line"></i>Dashboard</span></a>
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
