@extends('layouts.admin_layout')

@section('title')
  Tous Les formations
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
        <h3 class="page-title">La liste des Formations</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les Formation</li>
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
            <a href="{{ route('formation.create') }}" type="button" class="btn btn-primary">Ajouter une formation</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body">



          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Nom de formation</th>
                  <th>Responsable du formation</th>
                  <th>Description</th>
                  <th>Duree</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($formations as $formation)
                  <tr>
                    <td>{{ $formation->nom }}</td>
                    <td>{{ $formation->enseignant->nom }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->duree }}</td>
                    <td>
                      <a href="" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
                      <a data-bs-toggle="modal" href="#editformation_{{ $formation->id }}"
                        class="btn btn-sm bg-warning-light"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="#editformation_{{ $formation->id }}" class="btn btn-sm bg-danger-light"><i
                          class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                  <!-- Edit Details Modal -->
                  <div class="modal fade" id="editformation_{{ $formation->id }}" aria-hidden="true" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modifier une formation Enseignant</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('formation.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $formation->id }}">

                            <div class="row form-row">
                              <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                  <label>Nom</label>
                                  <input type="text" name="nom"
                                    class="form-control @error('nom') is-invalid @enderror"
                                    value="{{ $formation->nom }}">
                                  @error('nom')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror

                                </div>
                              </div>
                              <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                  <label>Responsable</label>
                                  <select required class="form-control" name="enseignant_id">
                                    <option disabled selected>-- Select --</option>
                                    @forelse ($enseignants as $enseignant)
                                      @if (!isset($enseignant->formation))
                                        <option value="{{ $enseignant->id }}">{{ $enseignant->nom }}
                                          {{ $enseignant->prenom }}</option>
                                      @elseif ($enseignant->id == $formation->enseignant->id)
                                        <option selected value="{{ $enseignant->id }}">{{ $enseignant->nom }}
                                          {{ $enseignant->prenom }}</option>
                                      @else
                                        <option disabled value="{{ $enseignant->id }}">{{ $enseignant->nom }}
                                          {{ $enseignant->prenom }}
                                        </option>
                                      @endif
                                    @empty
                                      <option disabled>Aucun enseignant</option>
                                    @endforelse
                                  </select>

                                </div>
                              </div>
                              <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                  <label>Duree par an</label>
                                  <input type="text" name="duree"
                                    class="form-control @error('duree') is-invalid @enderror"
                                    value="{{ $formation->duree }}">
                                  @error('duree')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror

                                </div>
                              </div>


                              <div class="col-xl-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                  <label>Description</label>
                                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
                                    rows="10">{{ $formation->description }}</textarea>

                                  @error('description')
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


  <!-- /Page Wrapper -->

  {{-- Contennt --}}
@endsection
