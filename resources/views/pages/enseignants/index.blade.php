@extends('layouts.admin_layout')

@section('title')
  Tous Les enseignants
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
        <h3 class="page-title">La liste des enseignants</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les enseignants</li>
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
            <a href="{{ route('enseignant.create') }}" type="button" class="btn btn-primary">Ajouter un enseignant</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body">



          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Nom et Prénom</th>
                  <th>Formation</th>
                  <th>Email</th>
                  <th>CIN</th>
                  <th>Matricule</th>
                  <th>Telephone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($enseignants as $enseignant)
                  <tr>
                    <td>{{ $enseignant->nom }} {{ $enseignant->prenom }}</td>
                    <td>{{ isset($enseignant->formation->nom) != null ? $enseignant->formation->nom : 'NONE' }}</td>
                    <td>{{ $enseignant->email }}</td>

                    <td>{{ $enseignant->cin }}</td>
                    <td>{{ $enseignant->matricule }}</td>
                    <td>{{ $enseignant->telephone }}</td>
                    <td>
                      <a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
                      <a data-bs-toggle="modal" href="#edit_enseignant_{{ $enseignant->id }}"
                        class="btn btn-sm bg-warning-light"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{ route('enseignant.delete', $enseignant->id) }}" class="btn btn-sm bg-danger-light"><i
                          class="fa-solid fa-trash-can"></i></a>
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
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- /Page Wrapper -->

  {{-- Contennt --}}
@endsection
