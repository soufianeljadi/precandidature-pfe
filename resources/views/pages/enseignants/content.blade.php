<!-- Page Header -->
<div class="page-header">
  <div class="row">
    <div class="col-sm-12">
      <h3 class="page-title">Bonjour {{ auth()->user()->nom }} {{ auth()->user()->prenom }}!</h3>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard </li>
      </ul>
    </div>
  </div>
</div>
<!-- /Page Header -->
@isset(auth()->user()->formation)
  <div class="row">
    <div class="col">
      <h5>Responsable Du Formation : <span class="text-info">{{ auth()->user()->formation->nom }} </span></h5>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6  col-sm-6 col-12 d-flex">
      <div class="card invoices-grid-card w-100">

        <div class="card-middle">
          <h2 class="card-middle-avatar">
            <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle"
                src="{{ asset('assets/img/logos/estfbs-40x40.png') }}" alt="User Image">
              {{ auth()->user()->formation->nom }}</a>
          </h2>
        </div>
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col">
              <span><i class="far fa-calendar-alt"></i> Duree</span>
              <h6 class="mb-0">{{ auth()->user()->formation->duree }}</h6>
            </div>
            <div class="col-auto">
              <span><i class="far fa-calendar-alt"></i> Date debut de pre-candidature</span>
              <h6 class="mb-0">{{ auth()->user()->formation->avis->debut_precandidature }}</h6>
            </div>
            <div class="col-auto">
              <span><i class="far fa-calendar-alt"></i> Date Fin de pre-candidature</span>
              <h6 class="mb-0">{{ auth()->user()->formation->avis->fin_precandidature }}</h6>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="badge bg-secondary-dark">{{ auth()->user()->formation->candidatures->count() }}
                Candidatures</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-body">
          <div class="dash-widget-header">
            <span class="dash-widget-icon text-primary border-primary">
              <i class="fe fe-users"></i>
            </span>
            <div class="dash-count">
              <h3>{{ $nbr_etudiants }}</h3>
            </div>
          </div>
          <div class="dash-widget-info">
            <h6 class="text-muted">Total utilisateurs</h6>
            <div class="progress progress-sm">
              <div class="progress-bar bg-primary w-50"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-body">
          <div class="dash-widget-header">
            <span class="dash-widget-icon text-success">
              <i class="fe fe-credit-card"></i>
            </span>
            @isset(auth()->user()->formation)
              <div class="dash-count">
                <h3>{{ $candidatures_today }}</h3>
              </div>
            @endisset
          </div>
          <div class="dash-widget-info">

            <h6 class="text-muted">Candidatures Today</h6>
            <div class="progress progress-sm">
              <div class="progress-bar bg-success w-50"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <div class="dash-widget-header">
          <span class="dash-widget-icon text-danger border-danger">
            <i class="fe fe-star-o"></i>
          </span>
          <div class="dash-count">
            <h3>485</h3>
          </div>
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Mentoring Points</h6>
          <div class="progress progress-sm">
            <div class="progress-bar bg-danger w-50"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <div class="dash-widget-header">
          <span class="dash-widget-icon text-warning border-warning">
            <i class="fe fe-folder"></i>
          </span>
          <div class="dash-count">
            <h3>$62523</h3>
          </div>
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Revenue</h6>
          <div class="progress progress-sm">
            <div class="progress-bar bg-warning w-50"></div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}



  </div>
@endisset
