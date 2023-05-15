@extends('layouts.admin_layout')

@section('title')
  Tous Les avis
@endsection
@section('header')
  @include('pages.admin.header')
@endsection
@section('sidebar')
  @include('pages.admin.sidebar')
@endsection
@section('content')
  {{-- Contennt --}}
  <!-- Page Wrapper -->


  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">La liste des avis</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les avis</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Page Header -->

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          {{-- <h4 class="card-title">Datatable des enseignant</h4> --}}
          <p class="card-text">
            <a href="{{ route('avis.create') }}" type="button" class="btn btn-primary"><i
                class="fa-solid fa-plus me-2"></i>Ajouter un avis</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body row  ">


          <div class="row row-grid">
            @foreach ($tous_avis as $avis)
              <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill">
                  @if ($avis->image_avis)
                    <img alt="Avis Image" src=" /avis/{{ $avis->image_avis }}  " class="card-img-top">
                  @endif
                  <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">{{ $avis->formation->nom }}</h5>
                    <h5 class="text-info">{{ count($avis->formation->candidatures) }} candidatures</h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                    <h5>Responsable : {{ $avis->formation->enseignant->prenom }}
                      {{ $avis->formation->enseignant->nom }}</h5>

                    <ul>
                      <li class="text-success">Debut : <span>{{ $avis->debut_precandidature }}</span></li>
                      <li class="text-danger">Fin <span>{{ $avis->fin_precandidature }}</span></li>
                    </ul>
                    </p>
                    <p>Avis Crée en : {{ $avis->created_at }}</p>

                    {{-- <a class="btn btn-sm btn-rounded btn-danger" href="#delete_avis_{{ $avis->id }}">Suprimmer</a> --}}
                    <button type="button" class="btn btn-sm bg-danger-light" data-bs-toggle="modal"
                      data-bs-target="#delete_avis_{{ $avis->id }}">
                      <i>Suprimmer</i>
                  </div>
                </div>
              </div>
              <!-- Delete avis  Modal -->

              <!-- Modal -->
              <div class="modal fade" id="delete_avis_{{ $avis->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer avis</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div>
                        Êtes-vous sûr de supprimer la avis de la formation : <br>{{ $avis->formation->nom }}
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                      <form action="{{ route('avis.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="avis_id" value="{{ $avis->id }}">
                        <input type="submit" value="Supprimer" class="btn btn-danger">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Delete avis  Modal -->
            @endforeach

            {{-- <div class="col-xl-4 col-lg-3 col p-3">
              <div class="card-body">
                <div class="card widget-profile user-widget-profile">
                  <div class="pro-widget-content">
                    <div class="profile-info-widget">
                      <a href="profile-mentee.html" class="booking-user-img">
                        <img src="{{ asset('avis/' . $avis->image_avis . '') }}" alt="User Image" height="300"
                          width="300">
                      </a>
                      <div class="profile-det-info">
                        <h3><a href="profile-mentee.html">{{ $avis->formation->nom }}</a></h3>

                        <div class="mentee-details">
                          <h5><b>Responsable :</b>{{ $avis->formation->enseignant->prenom }}
                            {{ $avis->formation->enseignant->nom }}</h5>
                          <h5 class="mb-0">
                            <small>Avis Crée en : {{ $avis->created_at }}</small>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mentee-info">
                    <ul>
                      <li class="text-success">Debut : <span>{{ $avis->debut_precandidature }}</span></li>
                      <li class="text-danger">Fin <span>{{ $avis->fin_precandidature }}</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>

          <div class="blog-pagination mt-4">
            <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>




          {{-- <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Formation</th>
                  <th>Responsable du Formation</th>
                  <th>Debut pre-candidature</th>
                  <th>Fin pre-candidature</th>
                  <th>Status</th>


                </tr>
              </thead>
              <tbody>

                <?php $i = 1; ?>

                @foreach ($tous_avis as $avis)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $avis->formation->nom }}</td>
                    <td>{{ $avis->formation->enseignant->nom }}</td>
                    <td>{{ $avis->debut_precandidature }}</td>
                    <td class="text-center">
                      {{ $avis->fin_precandidature }}
                    </td>

                    <td class="text-center">
                      <span class="badge badge-pill bg-success inv-badge">Publiée</span>
                    </td>

                  </tr>
                  <!-- Edit Details Modal -->
                   <div class="modal fade" id="edit_enseignant_{{ $enseignant->id }}" aria-hidden="true" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Details Enseignant</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="{{ route('enseignant.update') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $enseignant->id }}">

                            <div class="row form-row">
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Nom</label>
                                  <input type="text" name="nom"
                                    class="form-control @error('nom') is-invalid @enderror"
                                    value="{{ $enseignant->nom }}">
                                  @error('nom')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror

                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Prénom</label>
                                  <input type="text" name="prenom"
                                    class="form-control @error('prenom') is-invalid @enderror"
                                    value="{{ $enseignant->prenom }}">
                                  @error('nom')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label>Date of Birth</label>
                                  <div class="cal-icon">
                                    <input type="text" class="form-control" value="24-07-1983">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Email ID</label>
                                  <input type="email" class="form-control" value="allendavis@example.com">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Mobile</label>
                                  <input type="text" value="+1 202-555-0125" class="form-control">
                                </div>
                              </div>
                              <div class="col-12">
                                <h5 class="form-title"><span>Address</span></h5>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" value="4663 Agriculture Lane">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>City</label>
                                  <input type="text" class="form-control" value="Miami">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>State</label>
                                  <input type="text" class="form-control" value="Florida">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Zip Code</label>
                                  <input type="text" class="form-control" value="22434">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Country</label>
                                  <input type="text" class="form-control" value="United States">
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block w-100">Save Changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Edit Details Modal -->
                @endforeach


              </tbody>
            </table>
          </div> --}}
        </div>
      </div>
    </div>
  </div>


  <!-- /Page Wrapper -->

  {{-- Contennt --}}
@endsection
