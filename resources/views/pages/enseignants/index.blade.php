@extends('layouts.admin_layout')

@section('title')
  Tous Les enseignants
@endsection
@section('styles')
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
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif --}}
        <div class="card-header">
          {{-- <h4 class="card-title">Datatable des enseignant</h4> --}}
          <p class="card-text">
            <a href="{{ route('enseignant.create') }}" type="button" class="btn btn-primary">Ajouter un enseignant</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body">



          <div class="table-responsive ">
            <table class="datatable table table-stripped" id="myTable">
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
                      <a data-bs-toggle="modal" href="#edit_enseignant_{{ $enseignant->id }}" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
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
                          <form action="{{ route('enseignant.update') }}" method="POST">
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
                              <div class="col-12 col-sm-6">
                                <div class="form-group">

                                  <label>CIN</label>

                                  <input type="text" name="cin"
                                    class="form-control @error('cin') is-invalid @enderror"
                                    value="{{ $enseignant->cin }}">
                                  @error('cin')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror


                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">

                                  <label>Date de naissance</label>

                                  <input type="date" name="date_naissance"
                                    class="form-control @error('date_naissance') is-invalid @enderror"
                                    value="{{ $enseignant->date_naissance }}">
                                  @error('date_naissance')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror


                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label>Ville</label>

                                  <input type="text" name="ville"
                                    class="form-control @error('ville') is-invalid @enderror"
                                    value="{{ $enseignant->ville }}">
                                  @error('ville')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>

                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">

                                  <label>Nationalité</label>

                                  <input type="text" name="nationalite"
                                    class="form-control @error('nationalite') is-invalid @enderror"
                                    value="{{ $enseignant->nationalite }}">
                                  @error('nationalite')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>


                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">

                                  <label>Email</label>

                                  <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $enseignant->email }}">
                                  @error('email')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror


                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">


                                  <label>Mot de passe</label>

                                  <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ $enseignant->password }}">
                                  @error('password')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror


                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">


                                  <label>Adresse</label>


                                  <input type="text" name="adresse"
                                    class="form-control @error('adresse') is-invalid @enderror"
                                    value="{{ $enseignant->adresse }}">
                                  @error('adresse')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>


                              </div>
                              <div class="col-12">
                                <h5 class="form-title"><span>Informations professionnels</span></h5>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">

                                  <label>Matricule</label>

                                  <input type="text" name="matricule"
                                    class="form-control @error('matricule') is-invalid @enderror"
                                    value="{{ $enseignant->matricule }}">
                                  @error('matricule')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror

                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="form-group">
                                  <label class="col-lg-3 col-form-label">Téléphone</label>

                                  <input type="number" name="telephone"
                                    class="form-control @error('telephone') is-invalid @enderror"
                                    value="{{ $enseignant->telephone }}">
                                  @error('telephone')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block w-100">Sauvegarder les
                              modifications</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                {{-- view enseignant --}}
                <div class="modal fade" id="view_enseignant_{{ $enseignant->id }}" aria-hidden="true" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Details Enseignant</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $enseignant->id }}">

                          <div class="row form-row">
                            <div class="col-12 col-sm-6">
                              <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" disabled
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
                                <input type="text" name="prenom" disabled
                                  class="form-control @error('prenom') is-invalid @enderror"
                                  value="{{ $enseignant->prenom }}">
                                @error('nom')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">

                                <label>CIN</label>

                                <input type="text" name="cin"
                                  class="form-control @error('cin') is-invalid @enderror"
                                  value="{{ $enseignant->cin }}">
                                @error('cin')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror


                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">

                                <label>Date de naissance</label>

                                <input type="date" name="date_naissance"
                                  class="form-control @error('date_naissance') is-invalid @enderror"
                                  value="{{ $enseignant->date_naissance }}">
                                @error('date_naissance')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror


                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">
                                <label>Ville</label>

                                <input type="text" name="ville"
                                  class="form-control @error('ville') is-invalid @enderror"
                                  value="{{ $enseignant->ville }}">
                                @error('ville')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>

                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">

                                <label>Nationalité</label>

                                <input type="text" name="nationalite"
                                  class="form-control @error('nationalite') is-invalid @enderror"
                                  value="{{ $enseignant->nationalite }}">
                                @error('nationalite')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>


                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">

                                <label>Email</label>

                                <input type="email" name="email"
                                  class="form-control @error('email') is-invalid @enderror"
                                  value="{{ $enseignant->email }}">
                                @error('email')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror


                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">


                                <label>Mot de passe</label>

                                <input type="password" name="password"
                                  class="form-control @error('password') is-invalid @enderror"
                                  value="{{ $enseignant->password }}">
                                @error('password')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror


                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">


                                <label>Adresse</label>


                                <input type="text" name="adresse"
                                  class="form-control @error('adresse') is-invalid @enderror"
                                  value="{{ $enseignant->adresse }}">
                                @error('adresse')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>


                            </div>
                            <div class="col-12">
                              <h5 class="form-title"><span>Informations professionnels</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">

                                <label>Matricule</label>

                                <input type="text" name="matricule"
                                  class="form-control @error('matricule') is-invalid @enderror"
                                  value="{{ $enseignant->matricule }}">
                                @error('matricule')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror

                              </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">
                                <label class="col-lg-3 col-form-label">Téléphone</label>

                                <input type="number" name="telephone"
                                  class="form-control @error('telephone') is-invalid @enderror"
                                  value="{{ $enseignant->telephone }}">
                                @error('telephone')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary btn-block w-100">Sauvegarder les
                            modifications</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
@endsection
