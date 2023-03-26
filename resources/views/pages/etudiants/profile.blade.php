<div class="col-12">
  <div class="card">
    <div class="card-body">

      <!-- Profile Settings Form -->
      <form>
        <div class="row form-row">

          {{-- Row 1 --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations personnelles</h3>
            <div class="line"></div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" value="{{ auth()->user()->nom }}">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Prenom</label>
              <input type="text" class="form-control" value="{{ auth()->user()->prenom }}">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Code Massar</label>
              <input type="text" disabled class="form-control" value="{{ auth()->user()->code_massar }}">
            </div>
          </div>
          {{-- <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Code Massar </label>
              <select class="form-control select select2-hidden-accessible" data-select2-id="1" tabindex="-1"
                aria-hidden="true">
                <option data-select2-id="3">A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
              </select><span class="select2 select2-container select2-container--default" dir="ltr"
                data-select2-id="2" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-9ey9-container"><span class="select2-selection__rendered"
                      id="select2-9ey9-container" role="textbox" aria-readonly="true" title="A-">A-</span><span
                      class="select2-selection__arrow" role="presentation"><b
                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                  aria-hidden="true"></span></span>
            </div>
          </div> --}}
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>CIN</label>
              <input type="email" class="form-control" name="cin" value="{{ auth()->user()->cin }}">
            </div>
          </div>
          {{-- ROW 2 --}}
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Telephone</label>
              <input type="text" name="telephone" class="form-control" value="{{ auth()->user()->telephone }}">
            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Lieu de naissance</label>
              <select class="form-control">
                <option disabled selected>-- Sélectionner Ville --</option>
                @foreach ($villes as $ville)
                  <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                @endforeach

              </select>
            </div>
          </div>





          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Date naissance</label>
              <input type="date" class="form-control" name="date_naissance">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Sexe</label>
              <div class="col-lg-9">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1"
                    checked>
                  <label class="form-check-label" for="gender_male">
                    Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                  <label class="form-check-label" for="gender_female">
                    Female
                  </label>
                </div>
              </div>
            </div>
          </div>


          {{-- ROW 3 --}}

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
              <label>Adresse</label>
              <input type="text" class="form-control" value="Old Forge">
            </div>
          </div>
          {{-- BAC --}}
          <div class="comp-header mb-2">
            <h3 class="comp-title">Informations du Baccalauréat</h3>
            <div class="line"></div>
          </div>

          <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group">
              <label>Année d'obtention</label>
              <select class="form-control">
                <option selected> Sélectionner l'année d'obtention</option>
                <option value="1">2020</option>
                <option value="1">2020</option>
                <option value="1">2020</option>
                <option value="1">2020</option>
                <option value="1">2020</option>
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
