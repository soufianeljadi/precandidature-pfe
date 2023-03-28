@extends('layouts.admin_layout')

@section('title')
  Tous Les Formation
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
        <h3 class="page-title">Ajouter une formation</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Ajouter une formation</li>

        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Ajouter une formation</h4>
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
          <h4 class="card-title">Informations de la filière</h4>
          <form action="{{ route('formation.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-xl-12">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label text-info">Nom de la formation</label>
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




              </div>
              <div class="col-xl-12">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label text-info">Responsable du formation</label>
                  <div class="col-lg-9">
                    <select required class="form-control" name="enseignant_id">
                      <option disabled selected>-- Select --</option>
                      @forelse ($enseignants as $enseignant)
                        @if (!isset($enseignant->formation))
                          <option value="{{ $enseignant->id }}">{{ $enseignant->nom }} {{ $enseignant->prenom }}</option>
                        @else
                          <option disabled value="{{ $enseignant->id }}">{{ $enseignant->nom }} {{ $enseignant->prenom }}
                          </option>
                        @endif
                      @empty
                        <option disabled>Aucun enseignant</option>
                      @endforelse
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label text-info">Description</label>
                  <div class="col-lg-9">
                    <textarea rows="5" cols="5" name="description"
                      class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"
                      placeholder="Description"></textarea>

                    @error('description')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label text-info">la durée de la formation (par ans)</label>
                  <div class="col-lg-9">
                    <input type="text" name="duree" class="form-control @error('duree') is-invalid @enderror"
                      value="{{ old('duree') }}">
                    @error('duree')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
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