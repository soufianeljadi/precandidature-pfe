@extends('layouts.admin_layout')

@section('title')
  {{ auth()->user()->nom }} | Profile
@endsection
@section('sidebar')
  @include('pages.etudiants.sidebar')
@endsection
@section('header')
  @include('pages.etudiants.header')
@endsection

@section('content')
  {{-- Contennt --}}
  {{-- @include('layouts.content') --}}
  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">Bonjour {{ auth()->user()->nom }} {{ auth()->user()->prenom }}!</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard (Candidat)</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Page Header -->

  {{-- PROFILE --}}

  <div class="col-12">
    <div class="card">
      <div class="card-body">
        {{-- @if (Session::has('error'))
        <li class="alert aler-danger">{{ Session::get('error') }}</li>
      @endif --}}
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <!-- Profile Settings Form -->
        <form action="{{ route('etudiant.store') }}" method="POST">
          @csrf
          <div class="row form-row">

            {{-- Row 1 --}}
            <div class="comp-header mb-2">
              <h3 class="comp-title">Informations personnelles</h3>
              <div class="line"></div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ auth()->user()->nom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Prenom</label>
                <input type="text" class="form-control" name="prenom" value="{{ auth()->user()->prenom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>الاسم العائلي</label>
                <input type="text" class="form-control" name="prenom" value="{{ auth()->user()->prenom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>الاسم الشخصي</label>
                <input type="text" class="form-control" name="prenom" value="{{ auth()->user()->prenom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Code Massar </label>
                <input type="text" class="form-control" name="code_massar" value="{{ auth()->user()->code_massar }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>C.I.N بطاقة التعريف الشخصية</label>
                <input type="text" class="form-control" name="cin" value="{{ auth()->user()->cin }}">
              </div>
            </div>


            {{-- ROW 2 --}}
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Lieu de naissance </label>
                <input type="text" class="form-control" name="lieu_naissance"
                  value="{{ auth()->user()->lieu_naissance }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>مكان الازدياد </label>
                <input type="text" class="form-control" name="lieu_naissance_ar"
                  value="{{ auth()->user()->lieu_naissance_ar }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Pays</label>
                <input type="text" class="form-control" name="pays" value="{{ auth()->user()->pays }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Date naissance : <span
                    class="text-info">{{ auth()->user()->date_naissance == null ? 'NULL' : auth()->user()->date_naissance }}
                  </span>
                </label>
                @if (auth()->user()->date_naissance != null)
                  <input type="date" class="form-control" name="date_naissance"
                    value="{{ auth()->user()->date_naissance }}">
                @else
                  <input type="date" class="form-control " name="date_naissance">
                @endif
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Situation familiale</label>
                <select class="form-control" name="situation_familiale">
                  <option disabled selected>-- Sélectionner --</option>
                  @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                  @endforeach

                </select>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Sexe</label>
                <div class="col-lg-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="gender_male" value="1"
                      {{ auth()->user()->sexe == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="gender_male">
                      Male
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexe" id="gender_female" value="0"
                      {{ auth()->user()->sexe == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="gender_female">
                      Female
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Vous êtes fonctionnaire ? </label>
                <div class="col-lg-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fonctionnaire" id="oui" value="1"
                      {{ auth()->user()->fonctionnaire == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="oui">
                      Oui
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fonctionnaire" id="no" value="0"
                      {{ auth()->user()->fonctionnaire == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="no">
                      Non
                    </label>
                  </div>
                </div>
              </div>
            </div>












            {{-- ENd row --}}
          </div>




          {{--
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Ville : <span
                    class="text-info">{{ auth()->user()->ville == null ? 'NULL' : auth()->user()->ville_etudiant->nom }}
                  </span></label>
                <select class="form-control" name="ville">


                  @if (auth()->user()->ville != null)
                    <option value="{{ auth()->user()->ville }}" selected>{{ auth()->user()->ville_etudiant->nom }}
                    </option>
                  @else
                    <option disabled selected>Changer Ville</option>
                  @endif
                  @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                  @endforeach

                </select>
              </div>
            </div>
 --}}








          {{-- ROW 3 --}}
          {{--
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Ville</label>
              <select class="form-control" name="ville">
                <option disabled selected>-- Sélectionner Ville --</option>
                @foreach ($villes as $ville)
                  <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach

              </select>
            </div>
          </div> --}}

          {{--
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Lieu de naissance : <span
                    class="text-info">{{ auth()->user()->lieu_naissance == null ? 'NULL' : auth()->user()->lieu_naissance_etudiant->nom }}
                  </span></label>
                <select class="form-control" name="lieu_naissance">
                  @if (auth()->user()->lieu_naissance != null)
                    <option value="{{ auth()->user()->lieu_naissance }}" selected>
                      {{ auth()->user()->lieu_naissance_etudiant->nom }}
                    </option>
                  @else
                    <option disabled selected>Changer Ville</option>
                  @endif
                  @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                  @endforeach
                </select>
              </div>
            </div> --}}


          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Telephone</label>
              <input type="number" name="telephone" class="form-control" value="{{ auth()->user()->telephone }}">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl">
            <div class="form-group">
              <label>Adresse</label>
              <input type="text" class="form-control" name="adresse" value="{{ auth()->user()->adresse }}">
            </div>
          </div>
          {{-- BAC --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations du Baccalauréat</h3>
            <div class="line"></div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Année d'obtenation :
                {{ auth()->user()->dossier->annee_obt_bac }}
              </label>
              <select class="form-control" name="annee_obt_bac">
                <option selected> Sélectionner l'année d'obtention</option>
                @for ($i = 2018; $i <= 2023; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor

              </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Type</label>
              <select class="form-control">
                <option selected> Sélectionner un type</option>
                <option value="1">Science Math A</option>
                <option value="1">Science Math B</option>
                <option value="1">Science Math A</option>
                <option value="1">Science Math B</option>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Moyenne</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Mention</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Ville</label>
              <select class="form-control" name="ville">
                <option disabled selected>-- Sélectionner Ville --</option>
                @foreach ($villes as $ville)
                  <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl">
            <div class="form-group">
              <label>Établissement</label>
              <input type="text" class="form-control">
            </div>
          </div>



          {{-- BAC + 2 --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations du diplôme (BAC+2)</h3>
            <div class="line"></div>
          </div>


          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Type diplôme </label>
              <select class="form-control">
                <option selected> Sélectionner un type</option>
                <option value="1">DUT</option>
                <option value="1">BTS</option>
                <option value="1">DTS</option>
                <option value="1">DEUG</option>
                <option value="1">DEUST</option>
                <option value="1">AUTRE</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Année d'obtention</label>
              <select class="form-control">
                <option selected> Sélectionner l'année d'obtention</option>
                <option value="1">2020</option>
                <option value="1">2021</option>
                <option value="1">2022</option>
                <option value="1">2023</option>
                <option value="1">2024</option>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Moyenne</label>
              <input type="text" class="form-control">
            </div>
          </div>


          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Mention du diplôme</label>
              <select class="form-control">
                <option selected> Sélectionner la mention</option>
                <option value="1">Très Bien</option>
                <option value="1">Bien</option>
                <option value="1">Assez Bien</option>
                <option value="1">Passable</option>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Spécialité du diplôme </label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Établissement</label>
              <select class="form-control">
                <option selected> Sélectionner </option>
                <option value="1">EST</option>
                <option value="1">FST</option>
                <option value="1">ENSA</option>
                <option value="1">FP</option>
                <option value="1">FS</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Ville</label>
              <select class="form-control" name="ville">
                <option disabled selected>-- Sélectionner Ville --</option>
                @foreach ($villes as $ville)
                  <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach
              </select>
            </div>
          </div>



          {{-- Relevé de notes  --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Relevé de notes</h3>
            <div class="line"></div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <label>Note Semestre 1 </label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <label>Note Semestre 2 </label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <div class="change-avatar">
                <div class="upload-img">
                  <div class="change-photo-btn">
                    <span><i class="fa fa-upload"></i>Relevé du notes première année</span><br>
                    <input type="file" class="upload">
                  </div>
                  <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <label>Note Semestre 3 </label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <label>Note Semestre 4 </label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group">
              <div class="change-avatar">
                <div class="upload-img">
                  <div class="change-photo-btn">
                    <span><i class="fa fa-upload"></i>Relevé du notes deuxième année</span><br>
                    <input type="file" class="upload">
                  </div>
                  <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                </div>
              </div>
            </div>
          </div>




          <div class="submit-section">
            <button type="submit" class="btn btn-primary submit-btn">Eregistrer </button>
          </div>
        </form>
        <!-- /Profile Settings Form -->

      </div>
    </div>
  </div>

  {{-- Contennt --}}
@endsection
