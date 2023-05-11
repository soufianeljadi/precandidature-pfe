@extends('layouts.admin_layout')

@section('title')
  Gestion des locaux
@endsection
@section('sidebar')
  @include('pages.admin.sidebar')
@endsection
@section('header')
  @include('pages.admin.header')
@endsection
@section('content')
  {{-- Contennt --}}
  <!-- Page Wrapper -->


  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">Gestion Locaux</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Locaux</li>

        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">

      <div class="card">
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
          <h4 class="card-title">Gestion des locaux</h4>
          <form action="{{ route('locaux.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Excel FILE </label>
                  <div class="col-lg-9">
                    <input type="file" name="excel_file" id="file">

                    @error('excel_file')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Nombre des Etudiants par Local </label>
                  <div class="col-lg-9">
                    <input type="number" name="nbr_etudiants" id="nbr_etudiants">

                    @error('nbr_etudiants')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div>
                  <button class="btn btn-success" type="submit">GENERER</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
