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
        <h3 class="page-title">Modifier un enseignant</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Modifier un enseignant</li>

        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Modifier un enseignant</h4>
        </div>
        <div class="card-body">
          {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif --}}
          <h4 class="card-title">Informations personnels</h4>
          <form action="{{ route('enseignant.update', $Enseignant->id) }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{ $Enseignant->id }}">
                  <label class="col-lg-3 col-form-label">Nom</label>
                  <div class="col-lg-9">

                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"
                      value="{{ $Enseignant->nom }}">
                    @error('nom')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Prénom</label>
                  <div class="col-lg-9">
                    <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror"
                      value="{{ $Enseignant->prenom }}">
                    @error('nom')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Email</label>
                  <div class="col-lg-9">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "
                      value="{{ $Enseignant->email }}">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Mot de passe</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control " value="{{ $Enseignant->password }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">CIN</label>
                  <div class="col-lg-9">
                    <input type="text" name="cin" class="form-control @error('cin') is-invalid @enderror "
                      value="{{ $Enseignant->cin }}">
                    @error('cin')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Adresse</label>
                    <div class="col-lg-9">
                      <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror "
                        value="{{ $Enseignant->adresse }}">
                      @error('adresse')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Ville</label>
                    <div class="col-lg-9">
                      <input type="text" name="ville" class="form-control" value="{{ $Enseignant->ville }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Date de naissance</label>
                    <div class="col-lg-9">
                      <input type="date" name="date_naissance" class="form-control"
                        value="{{ $Enseignant->date_naissance }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">l'âge</label>
                    <div class="col-lg-9">
                      <input type="number" name="age" class="form-control" value="{{ $Enseignant->age }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Nationalité</label>
                    <div class="col-lg-9">
                      <input type="text" name="nationalite" class="form-control"
                        value="{{ $Enseignant->nationalite }}">
                    </div>
                  </div>


                </div>
              </div>
              <h4 class="card-title">Informations professionnels</h4>
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Matricule</label>
                    <div class="col-lg-9">
                      <input type="text" name="matricule" class="form-control"
                        value="{{ $Enseignant->matricule }}">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Telephone</label>
                    <div class="col-lg-9">
                      <input type="number" name="telephone" class="form-control"
                        value="{{ $Enseignant->telephone }}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
