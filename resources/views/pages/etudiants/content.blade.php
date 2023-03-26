<!-- Page Header -->
<div class="page-header">
  <div class="row">
    <div class="col-sm-12">
      <h3 class="page-title">Bonjour {{ auth()->user()->nom }}!</h3>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard (Candidat)</li>
      </ul>
    </div>
  </div>
</div>
<!-- /Page Header -->
@include('pages.etudiants.profile')
