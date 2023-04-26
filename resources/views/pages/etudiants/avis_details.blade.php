@extends('layouts.admin_layout')

@section('title')
  {{ $formation->nom }}
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
        <h3 class="page-title">Details</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">{{ $formation->nom }} </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Page Header -->

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">

          <!-- Blog details -->
          <div class="row">
            <div class="col-12 blog-details">
              <span class="course-title">{{ $formation->nom }}</span>
              <div class="d-flex flex-wrap date-col">
                <span class="date"><i class="fas fa-calendar-check"></i> Durée : {{ $formation->duree }} ans</span>
                <span class="author"><i class="fe fe-user"></i>Responsable : {{ $formation->enseignant->prenom }}
                  {{ $formation->enseignant->nom }}</span>
              </div>
              <div class="blog-details-img">
                <img class="img-fluid" src="{{ asset('avis/' . $formation->avis->image_avis . '') }}" alt="avis Image">
              </div>
              <div class="blog-content">
                <p> {{ $formation->description }}</p>
                <blockquote>
                  <ul>
                    <li>Toute pré-inscription en ligne hors délai sera rejetée.</li>
                    <li>Tout dossier incomplet sera rejeté,</li>
                    <li>La sélection sera faite sur la base des informations fournies par les candidats lors de leurs
                      préinscriptions. Toutefois, toute information erronée entrainera automatiquement l’annulation de la
                      candidature même après avoir réussi le concours.</li>
                    {{-- <li>Les candidats doivent consulter régulièrement le site web de l’établissement (estfbs.usms.ac.ma)
                      pour être au courant des nouvelles introduites.</li> --}}
                  </ul>
                </blockquote>

              </div>
              @if (auth()->user()->candidatures()->where('formation_id', $formation->id)->exists())
                <p class="text-info ">Vous avez déjà postulé à cette formation.<br><a class="btn btn-sm btn-dark"
                    href="{{ route('etudiant.candidature') }}">Mes
                    candidatures</a></p>
              @else
                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                  <form action="{{ route('candidature.create') }}" method="post">
                    @csrf
                    <input type="hidden" name="formation_id" value="{{ $formation->id }}">
                    {{-- <button class="custom-btn btn-11">Read More<div class="dot"></div></button> --}}

                    <div>
                      <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-block btn-outline-primary active custom-btn btn-11">Postuler
                        <div class="dot"></div>
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </form>
                </div>
            </div>
          </div>
          @endif
          <!-- /Blog details -->

        </div>
      </div>

      <!-- Share post -->
      {{-- <div class="card">
        <div class="card-body">
          <h4>Share the post</h4>
          <ul class="share-post">
            <li>
              <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- /Share post -->

      <!-- About Author -->
      {{-- <div class="card">
        <div class="card-body">
          <h4>About author</h4>
          <div class="about-author pt-4 d-flex align-items-center">
            <div class="left">
              <img class="rounded-circle" src="assets/img/profiles/avatar-12.jpg" width="120" alt="Ryan Taylor">
            </div>
            <div class="right">
              <h5>Linda Barrett</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- /About Author -->

    </div>
  </div>


  <!-- /Page Wrapper -->

  {{-- Contennt --}}



  {{-- Contennt --}}
@endsection
