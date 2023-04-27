@extends('layouts.admin_layout')

@section('title')
  Les avis
@endsection
@section('sidebar')
  @include('pages.etudiants.sidebar')
@endsection
@section('header')
  @include('pages.etudiants.header')
@endsection
@section('content')
  {{-- Contennt --}}
  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">La liste des avis</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les avis</li>
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
          <h5 class="text-success text-lead">Choisir une formation pour continuer </h5>
          {{-- <a href="{{ route('avis.create') }}" type="button" class="btn btn-success">Ajouter un avis</a> --}}
          {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="tab-content">

          <!-- Active Content -->
          <div role="tabpanel" id="activeservice" class="tab-pane fade show active">

            <div class="row">

              @foreach ($avis as $avi)
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                  <div class="course-box blog grid-blog">
                    <div class="blog-image mb-0">
                      <a href="{{ route('formation.details', $avi->formation->slug) }}"><img class="img-fluid"
                          src="{{ asset('avis/' . $avi->image_avis . '') }}" alt="Avis Image"></a>
                    </div>
                    <div class="course-content">
                      <span class="date">{{ $avi->created_at->format('d-m-Y') }}</span>
                      <span class="course-title">{{ $avi->formation->nom }}</span>
                      <p>EST Fkih Ben Salah</p>
                      <div class="row">
                        {{-- <div class="col">
                          <a href="edit-blog.html" class="text-success"><i class="far fa-edit"></i> Edit</a>
                        </div> --}}
                        <div class="col text-end">

                          <a class="text-info" href="{{ route('formation.details', $avi->formation->slug) }}"><i
                              class="fa-solid fa-circle-info"></i> Details</a>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach




            </div>
            <!-- /Active Content -->


          </div>


        </div>
      </div>
    </div>


    <!-- /Page Wrapper -->

    {{-- Contennt --}}



    {{-- Contennt --}}
  @endsection
