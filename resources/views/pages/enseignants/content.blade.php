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
@endisset
<div class="row">
  <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <div class="dash-widget-header">
          <span class="dash-widget-icon text-primary border-primary">
            <i class="fe fe-users"></i>
          </span>
          <div class="dash-count">
            <h3>168</h3>
          </div>
        </div>
        <div class="dash-widget-info">
          <h6 class="text-muted">Members</h6>
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
              <h3>{{ count(auth()->user()->formation->candidatures) }}</h3>
            </div>
          @endisset
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Candidatures</h6>
          <div class="progress progress-sm">
            <div class="progress-bar bg-success w-50"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12">
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
  </div>
</div>
