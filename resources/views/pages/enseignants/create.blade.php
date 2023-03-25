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
        <h3 class="page-title">Ajouter un enseignant</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Ajouter un enseignant</li>

        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Ajouter un enseignant</h4>
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
          <form action="{{ route('enseignant.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Nom</label>
                  <div class="col-lg-9">

                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"
                      value="{{ old('nom') }}">
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
                      value="{{ old('prenom') }}">
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
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Mot de passe</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">CIN</label>
                  <div class="col-lg-9">
                    <input type="text" name="cin" class="form-control" value="{{ old('cin') }}">
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Adresse</label>
                    <div class="col-lg-9">
                      <input type="text" name="adresse" class="form-control" value="{{ old('adresse') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Ville</label>
                    <div class="col-lg-9">
                      <input type="text" name="ville" class="form-control" value="{{ old('ville') }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Date de naissance</label>
                    <div class="col-lg-9">
                      <input type="date" name="date_naissance" class="form-control"
                        value="{{ old('date_naissance') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">l'âge</label>
                    <div class="col-lg-9">
                      <input type="number" name="age" class="form-control" value="{{ old('age') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Nationalité</label>
                    <div class="col-lg-9">
                      <input type="text" name="nationalite" class="form-control" value="{{ old('nationalite') }}">
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
                      <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Telephone</label>
                    <div class="col-lg-9">
                      <input type="number" name="telephone" class="form-control" value="{{ old('telephone') }}">
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
