@extends('layouts.admin_layout')

@section('title')
  Les candidatures
@endsection
@section('header')
  @include('pages.enseignants.header')
@endsection
@section('styles')
@endsection
@section('header')
  @include('pages.admin.header')
@endsection
@section('sidebar')
  @include('pages.enseignants.sidebar')
@endsection
@section('content')
  {{-- Contennt --}}
  <!-- Page Wrapper -->


  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title"> Les candidatures du formation
          {{ auth()->user()->formation->nom ?? 'NONE' }} </h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active"> Les candidatures </li>
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

        <div class="card-body">

          {{-- Filter --}}
          <div class="card report-card bg-light">
            <div class="card-body ">
              <form id="filterForm" action="{{ url('/tous-candidatures-estfbs') }}" method="GET">
                <div class="row">
                  <div class="col-md-12">
                    <ul class="app-listing row">

                      <li class="col-2">
                        <label class="col-form-label ">Année obtention BAC</label>
                        <input type="text" class="form-control bg-grey" name="annee_bac" placeholder="2021"
                          value="{{ Request::get('annee_bac') }}">
                      </li>
                      <li class="col-2">
                        <label class="col-form-label ">Note BAC</label>
                        <input type="text" class="form-control bg-grey" name="moyenne_bac" placeholder="17.2"
                          value="{{ Request::get('moyenne_bac') }}">
                      </li>
                      <li class="col-2">
                        <label class="col-form-label ">Mention Bac</label>
                        <select class="form-control" name="mention_bac">
                          <option disabled selected>-- Mention --</option>
                          <option {{ Request::get('mention_bac') == 1 ? 'selected' : '' }} value="1">Très Bien
                          </option>
                          <option {{ Request::get('mention_bac') == 2 ? 'selected' : '' }} value="2">Bien</option>
                          <option {{ Request::get('mention_bac') == 3 ? 'selected' : '' }} value="3">Assez Bien
                          </option>
                          <option {{ Request::get('mention_bac') == 4 ? 'selected' : '' }} value="4">Passable
                          </option>
                        </select>
                      </li>
                      <li class="col-2">
                        <label class="col-form-label ">Type Bac</label>
                        <select class="form-control" name="serie_bac">
                          <option selected disabled>-- Select --</option>
                          <option {{ Request::get('serie_bac') == 'sma' ? 'selected' : '' }} value="sma">Science Math A
                          </option>
                          <option {{ Request::get('serie_bac') == 'smb' ? 'selected' : '' }} value="smb">Science Math B
                          </option>
                          <option {{ Request::get('serie_bac') == 'pc' ? 'selected' : '' }} value="pc">Science
                            Physiques
                          </option>
                          <option {{ Request::get('serie_bac') == 'svt' ? 'selected' : '' }} value="svt">Science vie
                            et
                            terre </option>
                          <option {{ Request::get('serie_bac') == 'autre' ? 'selected' : '' }} value="autre">Autre
                          </option>
                        </select>
                      </li>

                      <li>
                        <label class="col-form-label ">Année obtention diplome </label>
                        <input type="text" class="form-control bg-grey" name="annee_diplome" placeholder="2021"
                          value="{{ Request::get('annee_diplome') }}">
                      </li>
                      <li class="col-2">
                        <label class="col-form-label ">Mention Diplome</label>
                        <select class="form-control" name="mention_diplome">
                          <option disabled selected>-- Mention --</option>
                          <option {{ Request::get('mention_diplome') == 1 ? 'selected' : '' }} value="1">Très Bien
                          </option>
                          <option {{ Request::get('mention_diplome') == 2 ? 'selected' : '' }} value="2">Bien
                          </option>
                          <option {{ Request::get('mention_diplome') == 3 ? 'selected' : '' }} value="3">Assez Bien
                          </option>
                          <option {{ Request::get('mention_diplome') == 4 ? 'selected' : '' }} value="4">Passable
                          </option>
                        </select>
                      </li>
                      <li class="col-2">
                        <label class="col-form-label ">Region</label>
                        <select class="form-control" name="region">
                          <option disabled selected>-- Region --</option>
                          @foreach ($regions as $key => $region)
                            <option {{ Request::get('region') == $region->id ? 'selected' : '' }}
                              value="{{ $region->id }}">
                              {{ $region->nom }}</option>
                          @endforeach

                        </select>
                      </li>

                    </ul>
                    <div class="row">
                      <div class="my-2 col">
                        <button type="submit" class="form-control text-white btn btn-primary">
                          <i class="fa-solid fa-sort me-2"></i> Filtrer les résultats
                        </button>
                      </div>
                      <div class="my-2 col">
                        <button id="resetbtn" type="reset" class="form-control text-white btn btn-secondary">
                          Reset
                        </button>

                      </div>
                      <div class="my-2 col">

                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <form action="{{ route('export.excel') }}" method="POST">
                @csrf
                <input type="hidden" name="region" value="{{ Request::get('region') }}">
                <input type="hidden" name="mention_diplome" value="{{ Request::get('mention_diplome') }}">
                <input type="hidden" name="serie_bac" value="{{ Request::get('serie_bac') }}">
                <input type="hidden" name="mention_bac" value="{{ Request::get('mention_bac') }}">
                <input type="hidden" name="annee_bac" value="{{ Request::get('annee_bac') }}">
                <input type="hidden" name="annee_diplome" value="{{ Request::get('annee_diplome') }}">
                <input type="hidden" name="moyenne_bac" value="{{ Request::get('moyenne_bac') }}">
                <input type="submit" value="Get Excel" class="btn btn-success">
              </form>

            </div>
          </div>
          {{-- Filter --}}

          <div class="table-responsive ">
            <table class="datatable table table-stripped" id="myTable">
              <thead>
                <tr>
                  <th>Nom et Prénom</th>
                  <th>Annee Bac</th>
                  <th>Moyenne Bac</th>
                  <th>Type Bac</th>
                  <th>Code Massar</th>
                  <th>CIN</th>


                  <th>Dossier d'inscription</th>
                  {{-- <th>Annee Bac</th>
                  <th>Annee Diplome</th> --}}
                  {{-- <th>Diplome document</th> --}}

                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($candidatures as $candidature)
                  <tr>
                    <td>{{ $candidature->etudiant->nom }} {{ $candidature->etudiant->prenom }}</td>
                    <td>{{ $candidature->etudiant->dossier->annee_obt_bac }}</td>
                    <td>{{ $candidature->etudiant->dossier->moyenne_bac }}</td>
                    <td>{{ $candidature->etudiant->dossier->serie_bac }}</td>
                    <td>{{ $candidature->etudiant->code_massar }}</td>
                    <td>{{ $candidature->etudiant->cin }}</td>

                    {{-- <td>
                      <a href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->dossier->bac_document) }}"
                        target="_blank" download>Télécharger bac <i class="fa-solid fa-download"></i></a>
                    </td> --}}
                    <td>
                      <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa-solid fa-folder-open"></i> Documents</a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" target="_blank"
                            href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->photo) }}"><i
                              class="fa-solid fa-image-portrait me-2"></i>photo
                            personnel</a>
                          <a class="dropdown-item" target="_blank"
                            href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->dossier->bac_document) }}"><i
                              class="fa-regular fa-file me-2"></i>baccalauréat</a>
                          <a class="dropdown-item" target="_blank"
                            href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->dossier->diplome_document) }}"><i
                              class="fa-regular fa-file me-2"></i>diplôme</a>
                          <a class="dropdown-item" target="_blank"
                            href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->dossier->releve_note) }}"><i
                              class="fa-regular fa-file me-2"></i>relevé de notes</a>
                          <a class="dropdown-item" target="_blank"
                            href="{{ asset('storage/documents/' . $candidature->etudiant->code_massar . '/' . $candidature->etudiant->dossier->cv) }}"><i
                              class="fa-regular fa-file me-2"></i>cv</a>
                        </div>
                      </div>
                    </td>
                    {{-- <td>{{ $candidature->etudiant->dossier->annee_obt_bac }}</td>
                    <td>{{ $candidature->etudiant->dossier->annee_obt_diplome }}</td> --}}

                    <td>
                      <a data-bs-toggle="modal" href="#view_candidature_{{ $candidature->id }}"
                        class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
                      <a data-bs-toggle="modal" href="#edit_enseignant_{{ $candidature->id }}"
                        class="btn btn-sm bg-warning-light"><i class="fa-solid fa-pen-to-square"></i></a>
                      {{-- <a href="{{ route('enseignant.delete', $enseignant->id) }}" class="btn btn-sm bg-danger-light"><i
                          class="fa-solid fa-trash-can"></i></a> --}}
                      <button style="margin: 0" type="button" class="btn btn-sm bg-danger-light"
                        data-bs-toggle="modal" data-bs-target="#delete_enseignant_{{ $candidature->id }}">
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                    </td>
                  </tr>
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
  {{-- <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script> --}}
@endsection
