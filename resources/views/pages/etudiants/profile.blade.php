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
@section('styles')
  <style>
    .form-control {
      border: 1px solid #009efb;
    }
  </style>
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
                <input required type="text" class="form-control" name="nom" value="{{ auth()->user()->nom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Prenom</label>
                <input required type="text" class="form-control" name="prenom" value="{{ auth()->user()->prenom }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>الاسم العائلي</label>
                <input required type="text" class="form-control" name="nom_ar" value="{{ auth()->user()->nom_ar }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>الاسم الشخصي</label>
                <input required type="text" class="form-control" name="prenom_ar"
                  value="{{ auth()->user()->prenom_ar }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Code Massar (C.N.E) </label>
                <input required type="text" class="form-control" name="code_massar"
                  value="{{ auth()->user()->code_massar }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>C.I.N بطاقة التعريف الشخصية</label>
                <input required type="text" class="form-control" name="cin" value="{{ auth()->user()->cin }}">
              </div>
            </div>


            {{-- ROW 2 --}}
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Lieu de naissance </label>
                <input required type="text" class="form-control" name="lieu_naissance"
                  value="{{ auth()->user()->lieu_naissance }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>مكان الازدياد </label>
                <input required type="text" class="form-control" name="lieu_naissance_ar"
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
                <label>Date naissance</label>
                @if (auth()->user()->date_naissance != null)
                  <input type="date" class="form-control" name="date_naissance"
                    value="{{ auth()->user()->date_naissance }}">
                @else
                  <input required type="date" class="form-control " name="date_naissance">
                @endif
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Province de naissance </label>
                <select required class="form-control" name="province_naissance">
                  <option disabled selected>-- Sélectionner Ville --</option>
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
            {{-- END ROW 2 --}}

            {{-- ROW 3 --}}
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Téléphone </label>
                <input placeholder="0612345678" type="number" class="form-control" name="telephone"
                  value="{{ auth()->user()->telephone }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Email </label>
                <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Ville</label>
                <select required class="form-control" name="ville">
                  <option disabled selected>-- Sélectionner Ville --</option>
                  @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <label>Situation familiale</label>
                <select required class="form-control" name="situation_familiale">
                  <option disabled selected>-- Sélectionner Situation --</option>
                  <option value="c"> Célibataire</option>
                  <option value="m">Marié(e)</option>
                  <option value="d">Divorcé(e)</option>
                  <option value="v">Veuf/Veuve</option>
                  <option value="a">Autre</option>
                </select>
              </div>
            </div>


            <div class="col-12 col-md-6 col-xl-2">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>Photo personnelle</span><br>
                      <input required type="file" class="upload" name="photo">
                    </div>
                    <small class="form-text text-muted">Fichier .JPG Taille maximale de 200Ko</small>
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
            {{-- END ROW 3 --}}
            {{-- ROW 4 --}}
            <div class="row form-row">
              <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group">
                  <label>Adresse personnelle</label>
                  <input required placeholder="Adresse personnelle  " type="text" class="form-control"
                    name="adresse_perso1" value="{{ auth()->user()->adresse_perso1 }}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group">
                  <label>Adresse personnelle 2</label>
                  <input required placeholder="Adresse personnelle 2 " type="text" class="form-control"
                    name="adresse_perso2" value="{{ auth()->user()->adresse_perso2 }}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group">
                  <label>Adresse personnelle 3</label>
                  <input required placeholder="Adresse personnelle 3 " type="text" class="form-control"
                    name="adresse_perso3" value="{{ auth()->user()->adresse_perso3 }}">
                </div>
              </div>
            </div>


            {{-- END ROW 4 --}}
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

          {{--
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="number" name="telephone" class="form-control"
                                value="{{ auth()->user()->telephone }}">
                        </div>
                    </div> --}}

          {{-- <div class="col-12 col-md-6 col-xl">
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" name="adresse"
                                value="{{ auth()->user()->adresse }}">
                        </div>
                    </div> --}}
          {{-- BAC --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations du Baccalauréat</h3>
            <div class="line"></div>
          </div>
          <div class="row form-row">
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Année d'obtenation :</label>
                <input required placeholder="EX: 2023" type="text" class="form-control" name="annee_obt_bac"
                  value="{{ auth()->user()->dossier->annee_obt_bac }}">
              </div>

            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Série du bac :</label>
                <select class="form-control" name="serie_bac">
                  <option disabled selected> Sélectionner un type</option>
                  <option value="sma">Science Math A</option>
                  <option value="smb">Science Math B</option>
                  <option value="pc">Science Physique </option>
                  <option value="svt">Science de vie et</option>
                </select>

              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note du baccalauréat </label>
                <input required placeholder="EX: 16.41" type="number" class="form-control" name="moyenne_bac"
                  value="{{ auth()->user()->dossier->moyenne_bac }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Mention du bac </label>
                <select class="form-control"name="mention_bac">
                  <option selected> Sélectionner la mention</option>
                  <option value="1">Très Bien</option>
                  <option value="2">Bien</option>
                  <option value="3">Assez Bien</option>
                  <option value="4">Passable</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Province du bac :</label>
                <select class="form-control" name="province_bac">
                  <option disabled selected>-- Sélectionner Ville --</option>
                  @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>joignez votre baccalauréat</span><br>
                      <input required type="file" class="upload" name="bac_document">
                    </div>
                    <small class="form-text text-muted">Fichier .PDF Taille maximale de 700Ko</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl">
              <div class="form-group">
                <label>Académie </label>
                <input required type="text" class="form-control" name="academie"
                  value="{{ auth()->user()->dossier->academie }}">
              </div>
            </div>
            {{-- <div class="col-12 col-md-6 col-xl-3">
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
                    </div> --}}
          </div>


          {{-- BAC + 2 --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations du diplôme (BAC+2)</h3>
            <div class="line"></div>
          </div>

          <div class="row form-row">
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Année d'obtenation du diplôme
                </label>
                <input required placeholder="EX: 2023" type="text" class="form-control" name="annee_obt_diplome"
                  value="{{ auth()->user()->dossier->annee_obt_diplome }}">
              </div>
            </div>


            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Type diplôme </label>
                <input required placeholder="EX: DUT,DEUG,BTS,DTS..." type="text" class="form-control"
                  name="type_diplome" value="{{ auth()->user()->dossier->type_diplome }}">
              </div>
            </div>
            {{-- <div class="col-12 col-md-6 col-xl-3">
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
                    </div> --}}
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note du diplôme</label>
                <input required type="number" class="form-control" name="moyenne_diplome"
                  value="{{ auth()->user()->dossier->moyenne_diplome }}">
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Mention du diplôme </label>
                <select class="form-control"name="mention_diplome"
                  value="{{ auth()->user()->dossier->mention_diplome }}">
                  <option selected> Sélectionner la mention</option>
                  <option value="1">Très Bien</option>
                  <option value="2">Bien</option>
                  <option value="3">Assez Bien</option>
                  <option value="4">Passable</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6">
              <div class="form-group">
                <label>Specialité du diplôme </label>
                <input required type="text" class="form-control" name="specialite_diplome"
                  value="{{ auth()->user()->dossier->specialite_diplome }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-6">
              <div class="form-group">
                <label>Établissement ayant fournie le diplôme</label>
                <input required type="text" class="form-control" name="etablissement"
                  value="{{ auth()->user()->dossier->etablissement }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note S1 </label>
                <input required placeholder="EX: 15.54" type="text" class="form-control"name="note_s1"
                  value="{{ auth()->user()->dossier->note_s1 }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note S2</label>
                <input required placeholder="EX: 15.54" type="text" class="form-control"name="note_s2"
                  value="{{ auth()->user()->dossier->note_s2 }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note S3</label>
                <input required placeholder="EX: 15.54" type="text" class="form-control"name="note_s3"
                  value="{{ auth()->user()->dossier->note_s3 }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <label>Note S4</label>
                <input required placeholder="EX: 15.54" type="text" class="form-control"name="note_s4"
                  value="{{ auth()->user()->dossier->note_s4 }}">
              </div>
            </div>

            {{-- Relevé de notes  --}}
            <div class="comp-header mb-2">
              <h5 class="comp-title">Documents</h5>
              <div class="line"></div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>Relevé du notes première année</span><br>
                      <input required type="file" class="upload" name="releve_annee_1">
                    </div>
                    <small class="form-text text-muted">Fichier .PDF Taille maximale de 700Ko</small>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>Relevé du notes deuxième année</span><br>
                      <input required type="file" class="upload"name="releve_annee_2">
                    </div>
                    <small class="form-text text-muted">Fichier .PDF Taille maximale de 700Ko</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>Joignez votre diplôme ou attestation de réussite</span><br>
                      <input required type="file" class="upload"name="diplome_document">
                    </div>
                    <small class="form-text text-muted">Fichier .PDF Taille maximale de 700Ko</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i>Joignez votre CV</span><br>
                      <input required type="file" class="upload"name="cv">
                    </div>
                    <small class="form-text text-muted">Fichier .PDF Taille maximale de 700Ko</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="submit-section">
              <button type="submit" class="btn btn-primary submit-btn">En registrer </button>
            </div>
          </div>
        </form>
      </div>
    </div>



  </div>

  </div>
  </div>

  {{-- Contennt --}}
@endsection
