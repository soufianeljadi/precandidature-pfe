@extends('layouts.admin_layout')

@section('title')
  Tous Les formations
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
        <h3 class="page-title">La liste des Formations</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Tous les Formation</li>
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
            <a href="{{ route ("formation.create") }}" type="button" class="btn btn-primary">Ajouter une formation</a>
            {{-- <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary">Primary</button> --}}
          </p>
        </div>
        <div class="card-body">



          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Nom de formation</th>
                  <th>Description</th>
                  <th>Duree</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($formations as $formation)
                  <tr>
                    <td>{{ $formation->nom }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->duree }}</td>
                    <td>
                      <a href="" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i></a>
                      <a href="{{ route('formation.edit', $formation->id) }}" class="btn btn-sm bg-warning-light"><i
                          class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{ route('formation.delete', $formation->id) }}" class="btn btn-sm bg-danger-light"><i class="fa-solid fa-trash-can"></i></a>
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
