@extends('layouts.admin_layout')

@section('title')
  Notifications Des Candidats
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
        <h3 class="page-title">Notifications SMS</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Notifications</li>

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
          <h3 class="card-title">Notifications SMS</h3>

          <form action="{{ route('notifications.store') }}" method="POST" enctype="multipart/form-data"
            id="notificationsForm">
            @csrf
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Fichier Excel </label>
                  <div class="col-lg-9">
                    <div class="form-group service-upload">
                      <span>Importer fichier ici</span>
                      <input type="file" name="fichier_excel" required>
                    </div>
                    @error('excel_file')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                {{-- <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Notification pour : </label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="radio"> Concours écrit
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="radio"> L'entretien oral
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="radio"> la liste des candidats retenus définitivement
                      </label>
                    </div>
                  </div>
                </div> --}}
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Message </label>
                  <div class="col-lg-9">
                    <textarea rows="5" cols="5" class="form-control" placeholder="Message ici" name="message" required></textarea>
                  </div>
                </div>




                <div>
                  <button class="btn btn-success" type="submit"><i
                      class="fa-solid fa-file-export me-2"></i>Envoyer</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
@endsection
