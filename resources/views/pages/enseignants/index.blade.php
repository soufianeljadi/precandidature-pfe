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
        <h3 class="page-title">La liste des enseignants</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les enseignants</li>
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
            <a href="{{ route('enseignant.create') }}" type="button" class="btn btn-primary">Ajouter un enseignant</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body">



          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Nom et Prénom</th>
                  <th>Email</th>
                  <th>CIN</th>
                  <th>Matricule</th>
                  <th>Telephone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($enseignants as $enseignant)
                  <tr>
                    <td>{{ $enseignant->nom }}{{ $enseignant->prenom }}</td>
                    <td>{{ $enseignant->email }}</td>

                    <td>{{ $enseignant->cin }}</td>
                    <td>{{ $enseignant->matricule }}</td>
                    <td>{{ $enseignant->telephone }}</td>
                    <td>
                      <a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
                      <a href="profile.html" class="btn btn-sm bg-warning-light"><i
                          class="fa-solid fa-pen-to-square"></i></a>
                      <a href="profile.html" class="btn btn-sm bg-danger-light"><i class="fa-solid fa-trash-can"></i></a>
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


  <!-- /Page Wrapper -->

  {{-- Contennt --}}
@endsection
