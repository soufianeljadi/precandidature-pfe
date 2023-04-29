@if (Auth::guard('etudiant'))
  @include('pages.etudiants.sidebar');
@elseif (Auth::guard('enseignant'))
  @include('pages.enseignants.sidebar');
@endif
