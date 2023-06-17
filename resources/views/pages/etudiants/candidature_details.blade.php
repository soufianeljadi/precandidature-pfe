@extends('layouts.admin_layout')

@section('title')
  Mes Candidatures
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
        <h3 class="page-title">Formation : {{ $candidature->formation->nom }} </h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Candidature</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Page Header -->
  <div class="row justify-content-center">
    <div class="col">
      <div class="card invoice-info-card">
        <div class="card-body">
          <div class="invoice-item invoice-item-one">
            <div class="row">
              <div class="col-md-6">
                <div class="invoice-logo">
                  <img src="{{ asset('assets/img/estfbs_test1.png') }}" alt="logo">
                </div>
                <div class="invoice-head">
                  <h2>{{ $candidature->etudiant->nom }} {{ $candidature->etudiant->prenom }}</h2>
                  <p>Candidature du formation : {{ $candidature->formation->nom }}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="invoice-info">
                  <strong class="customer-text-one">Ecole Supérieure de Technologie – Fkih Ben Salah</strong>
                  <h6 class="invoice-name"> Reçu de pré-inscription</h6>
                  <p class="invoice-details">
                    Date : {{ $candidature->created_at->format('d-m-Y') }} <br>

                  </p>
                </div>
              </div>
            </div>
          </div>



          <!-- Invoice Item -->
          <div class="invoice-item invoice-table-wrap">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive table-hover">
                  <table class="invoice-table table table-center mb-0">
                    <thead>
                      <tr>
                        <th>{{ $candidature->etudiant->nom }} - {{ $candidature->etudiant->nom_ar }}</th>
                        <th>{{ $candidature->etudiant->prenom }} - {{ $candidature->etudiant->prenom_ar }}</th>
                        <th>{{ $candidature->etudiant->email }}</th>
                        <th>Téléphone : {{ $candidature->etudiant->telephone }}</th>
                        <th class="text-end">Code Massar : {{ $candidature->etudiant->code_massar }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>CIN : {{ $candidature->etudiant->cin }}</td>
                        <td>{{ $candidature->etudiant->lieu_naissance }}</td>
                        <td>{{ $candidature->etudiant->lieu_naissance_ar }}</td>
                        <th>{{ $candidature->etudiant->date_naissance }}</th>
                        <td class="text-end">Province de
                          naissance : {{ $candidature->etudiant->province_naissance_etudiant->nom }}</td>
                      </tr>
                      <tr>
                        <td>Pays : {{ $candidature->etudiant->pays }}</td>
                        <td>{{ $candidature->etudiant->sexe == 1 ? 'Masculin' : 'Féminin ' }}</td>
                        <td>Ville : {{ $candidature->etudiant->ville_etudiant->nom }}</td>
                        <th>Fonctionnaire : {{ $candidature->etudiant->fonctionnaire == 1 ? 'Oui' : 'Non' }}</th>
                        {{-- <td class="text-end">$3,000</td> --}}
                      </tr>
                      {{-- <tr>
                        <td>Ui Designer</td>
                        <td>Designing</td>
                        <td>$100 - $500</td>
                        <th>10%</th>
                        <td class="text-end">$11,000</td>
                      </tr> --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /Invoice Item -->

          {{-- <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-6">
              <div class="invoice-terms">
                <h6>Adresses Personnels:</h6>
                <i class="mb-0">{{ $candidature->etudiant->adresse_perso1 }} <br>
                  {{ $candidature->etudiant->adresse_perso2 }} <br>
                  {{ $candidature->etudiant->adresse_perso3 }} <br>
                </i>
              </div>
              <div class="invoice-terms">
                <h6>Terms and Conditions:</h6>
                <p class="mb-0">Enter customer notes or any other details</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="invoice-total-card">
                <div class="invoice-total-box">
                  <div class="invoice-total-inner">
                    <p>Taxable <span>$6,660.00</span></p>
                    <p>Additional Charges <span>$6,660.00</span></p>
                    <p>Discount <span>$3,300.00</span></p>
                    <p class="mb-0">Sub total <span>$3,300.00</span></p>
                  </div>
                  <div class="invoice-total-footer">
                    <h4>Total Amount <span>$143,300.00</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="invoice-sign text-end">
            <img class="img-fluid d-inline-block" src="assets/img/signature.png" alt="sign">
            <span class="d-block">Harristemp</span>
          </div> --}}
        </div>
      </div>
    </div>
  </div>


  <!-- /Page Wrapper -->

  {{-- Contennt --}}



  {{-- Contennt --}}
@endsection
