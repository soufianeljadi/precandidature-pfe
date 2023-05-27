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
          <h3 class="card-title">Gestion des locaux</h3>
          <h6 class="text-primary "><i class="fa-regular fa-circle-question me-2"></i> Veuillez importer le fichier
            excel
            retenu par le responsable d'une formation !</h6>
          <form action="{{ route('locaux.store') }}" method="POST" enctype="multipart/form-data" id="locauxForm">
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

                <div id="inputRepeater">
                  <div class="input-item">
                    <input type="text" class="form-control-sm" name="inputField1[]" placeholder="Nom du Local" />
                    <input type="text" class="form-control-sm" name="inputField2[]" placeholder="Capacite du Local" />
                    <button class="remove-button btn-sm btn-danger btn mx-2">Supprimer</button>
                  </div>
                </div>
                <button id="addButton" class="btn btn-sm btn-primary my-2">Ajouter un local</button>
                <div>
                  <button class="btn btn-success" type="submit"><i
                      class="fa-solid fa-file-export me-2"></i>GENERER</button>
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
  <script>
    function handleAddButtonClick(e) {
      const locauxForm = document.getElementById("locauxForm");

      e.preventDefault();

      const inputRepeaterElement = document.getElementById('inputRepeater');

      const inputItem = document.createElement('div');
      inputItem.className = 'input-item';

      const inputField = document.createElement('input');
      inputField.className = 'form-control-sm';
      inputField.type = 'text';
      inputField.name = 'inputField1[]';
      inputField.placeholder = 'Nom du Local';


      const inputField2 = document.createElement('input');
      inputField2.className = 'form-control-sm';
      inputField2.type = 'text';
      inputField2.name = 'inputField2[]';
      inputField2.placeholder = 'Capacite du Local';

      const removeButton = document.createElement('button');
      removeButton.className = 'remove-button btn-sm btn-danger btn mx-2';
      removeButton.textContent = 'Supprimer';

      inputItem.appendChild(inputField);
      inputItem.appendChild(inputField2);
      inputItem.appendChild(removeButton);

      inputRepeaterElement.appendChild(inputItem);
      removeButton.addEventListener('click', handleRemoveButtonClick);


    }

    function handleRemoveButtonClick(event) {
      const inputItem = event.target.parentNode;
      const inputRepeaterElement = document.getElementById('inputRepeater');

      // Remove the input item container from the input repeater
      inputRepeaterElement.removeChild(inputItem);
    }


    const addButton = document.getElementById('addButton');
    addButton.addEventListener('click', handleAddButtonClick);
  </script>
@endsection
