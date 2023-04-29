@if (Auth::guard('etudiant'))
  @include('pages.etudiants.header');
@elseif (Auth::guard('enseignant'))
  @include('pages.enseignants.sidebar');
@endif
