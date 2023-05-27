<!-- Page Header -->
<div class="page-header">
  <div class="row">
    <div class="col-sm-12">
      <h3 class="page-title">Bonjour {{ auth()->user()->name }}!</h3>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard (Administrateur)</li>
      </ul>
    </div>
  </div>
</div>
<!-- /Page Header -->

<div class="row">
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
          <h6 class="text-muted">Étudiants</h6>
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
          <span class="dash-widget-icon text-danger border-danger">
            <i class="fe fe-star-o"></i>
          </span>
          <div class="dash-count">
            <h3>{{ $nbr_enseignants }}</h3>
          </div>
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Enseignants</h6>
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
            <h3>{{ $nbr_candidatures }}</h3>
          </div>
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Totale Candidatures</h6>
          <div class="progress progress-sm">
            <div class="progress-bar bg-warning w-50"></div>
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
            <i class="fa-regular fa-folder-open"></i> </span>
          <div class="dash-count">
            <h3>{{ $nbr_candidatures_today }}</h3>
          </div>
        </div>
        <div class="dash-widget-info">

          <h6 class="text-muted">Candidatures Aujourd'hui</h6>
          <div class="progress progress-sm">
            <div class="progress-bar bg-success w-50"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="row">

  <div class="col-md-12 col-lg-6">

    <!-- Sales Chart -->
    <div class="card card-chart">
      <div class="card-header">
        <h4 class="card-title">Nombre des candidatures par région</h4>
      </div>
      <div class="card-body">
        <div id="nbrCandidaturesParRegion"></div>
      </div>

    </div>
    <!-- /Sales Chart -->

  </div>
  <div class="col-md-12 col-lg-6">

    <!-- Invoice Chart -->
    <div class="card card-chart">
      <div class="card-header">
        <h4 class="card-title">Nombre des candidatures par Jour</h4>
      </div>
      <div class="card-body">
        <div id="morrisLine"></div>
      </div>
    </div>
    <!-- /Invoice Chart -->

  </div>
</div>
<div class="row">
  <div class="col-md-12 d-flex">

    <!-- Feed Activity -->
    <div class="card  card-table flex-fill">
      <div class="card-header">
        <h4 class="card-title">Nombre des candidatures par Formation </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-center mb-0">
            <thead>
              <tr>
                <th>Formation</th>
                <th>Nombre de Candidatures</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($formations as $formation)
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle"
                          src="admin_assets/img/user/user.jpg" alt="User Image"></a>
                      <a href="profile.html">{{ $formation->nom }}</a>
                    </h2>
                  </td>
                  <td>{{ count($formation->candidatures) }}</td>
                </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /Feed Activity -->

  </div>
  <div class="col-md-12 d-flex">

    <!-- Recent Orders -->
    <div class="card card-table flex-fill">
      <div class="card-header">
        <h4 class="card-title">Nombre des utilisateurs par Region</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-center mb-0">
            <thead>
              <tr>
                <th>Région</th>
                <th>Nombre des étudiants</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($etudiants_par_region as $item)
                <tr>
                  <td>
                    <h2 class="table-avatar">
                      {{ $item->nom }}
                    </h2>
                  </td>
                  <td>
                    <h2 class="table-avatar">
                      {{ $item->etudiants_count }}
                    </h2>
                  </td>

                </tr>
              @endforeach



            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /Recent Orders -->

  </div>

</div>



@section('scripts')
  <script>
    $(function() {



      /* Morris Area Chart */


      var candidaturesParRegion = {!! json_encode($candidaturesParRegion) !!};
      console.log(candidaturesParRegion);
      window.mA = Morris.Area({
        element: 'nbrCandidaturesParRegion',
        data: candidaturesParRegion,
        xkey: 'region',
        ykeys: ['total'],
        labels: ['Nombre des candidatures'],
        lineColors: ['#1b5a90'],
        lineWidth: 2,
        parseTime: false,
        fillOpacity: 0.5,
        gridTextSize: 10,
        hideHover: 'auto',
        resize: true,
        redraw: true,
        yLabelFormat: function(y) {
          return Math.round(y);
        },
        // xLabelAngle: 65
        xLabelMargin: 10, // Add some margin to the X-axis labels
        xLabelAngle: 90, // Rotate the X-axis labels by 45 degrees
        // xLabelFormat: labelFormatter // Use the labelFormatter function to format the X-axis labels
      });
      $('svg').height(500);





      /* Morris Line Chart */
      var candidaturesParJour = {!! json_encode($candidaturesParJour) !!};
      var maxCandidatures = Math.max.apply(Math, candidaturesParJour.map(function(c) {
        return c.nombreCandidatures;
      }));
      var yLabelInterval = Math.ceil(maxCandidatures / 5);

      window.mL = Morris.Line({
        element: 'morrisLine',
        data: candidaturesParJour,
        xkey: 'jour',
        ykeys: ['nombreCandidatures'],
        labels: ['nombre des Candidatures'],
        lineColors: ['#ff9d00'],
        lineWidth: 1,
        gridTextSize: 10,
        hideHover: 'auto',
        resize: true,
        parseTime: false,
        ymin: 0,
        ymax: maxCandidatures,
        xLabelMargin: 10, // Add some margin to the X-axis labels
        xLabelAngle: 90, // Rotate the X-axis labels by 45 degrees

        yLabelFormat: function(y) {
          return Math.round(y); // format labels as integers
        },
        yLabelInterval: Math.ceil(maxCandidatures / 5), // set interval between labels based on maximum value


        redraw: true
      });
      $('svg').height(500);

      $(window).on("resize", function() {
        mA.redraw();
        mL.redraw();
      });

    });
  </script>
@endsection
