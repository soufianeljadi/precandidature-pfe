@extends('layouts.admin_layout')

@section('title')
  Lancer un avis
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
        <h3 class="page-title">Ajouter un avis de pre-candidature</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Ajouter un avis</li>

        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Ajouter un avis</h4>
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('avis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <h4 class="card-title">Remplir les informations suivants :</h4>
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Date de debut pre-candidature</label>
                    <div class="col-lg-9">
                      <input type="date" name="debut_precandidature"
                        class="form-control @error('debut_precandidature') is-invalid @enderror"
                        value="{{ old('debut_precandidature') }}">
                      @error('debut_precandidature')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Date de fin pre-candidature</label>
                    <div class="col-lg-9">
                      <input type="date" name="fin_precandidature"
                        class="form-control @error('fin_precandidature') is-invalid @enderror"
                        value="{{ old('fin_precandidature') }}">
                      @error('fin_precandidature')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Selectionner Formation </label>
                    <div class="col-lg-9">
                      <select required class="form-control" name="formation_id">
                        <option disabled selected>-- Select --</option>
                        @forelse ($formations as $formation)
                          @if (!isset($formation->avis))
                            <option value="{{ $formation->id }}">{{ $formation->nom }} </option>
                          @else
                            <option disabled value="{{ $formation->id }}">{{ $formation->nom }} </option>
                          @endif
                        @empty
                          <option disabled>Aucunne formation</option>
                        @endforelse
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Image de l'avis </label>
                    <div class="col-lg-9">
                      <input type="file" name="image_avis"
                        class="form-control @error('image_avis') is-invalid @enderror">
                      @error('image_avis')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
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
