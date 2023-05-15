<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Ajouter un enseignant</h4>
      </div>
      <div class="card-body">
        {{-- @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif --}}
        <h4 class="card-title">Informations personnels</h4>
        <form wire:submit.prevent="submit">
          @csrf
          <div class="row">
            <div class="col-xl-6">
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Nom</label>
                <div class="col-lg-9">

                  <input type="text" wire:model="nom" class="form-control @error('nom') is-invalid @enderror"
                    value="{{ old('nom') }}">
                  @error('nom')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Prénom</label>
                <div class="col-lg-9">
                  <input type="text" wire:model="prenom" class="form-control @error('prenom') is-invalid @enderror"
                    value="{{ old('prenom') }}">
                  @error('prenom')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Email</label>
                <div class="col-lg-9">
                  <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Mot de passe</label>
                <div class="col-lg-9">
                  <input type="password" wire:model="password"
                    class="form-control @error('password') is-invalid @enderror">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">CIN</label>
                <div class="col-lg-9">
                  <input type="text" wire:model="cin" class="form-control @error('cin') is-invalid @enderror"
                    value="{{ old('cin') }}">
                  @error('cin')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-xl-6">

              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Ville</label>
                <div class="col-lg-9">
                  <input type="text" wire:model="ville" class="form-control @error('ville') is-invalid @enderror"
                    value="{{ old('ville') }}">
                  @error('ville')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Date de naissance</label>
                <div class="col-lg-9">
                  <input type="date" wire:model="date_naissance"
                    class="form-control @error('date_naissance') is-invalid @enderror"
                    value="{{ old('date_naissance') }}">
                  @error('date_naissance')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              {{-- <div class="form-group row">
                <label class="col-lg-3 col-form-label">l'âge</label>
                <div class="col-lg-9">
                  <input type="number" name="age" class="form-control @error('age') is-invalid @enderror"
                    value="{{ old('age') }}">
                  @error('age')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div> --}}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Nationalité</label>
                <div class="col-lg-9">
                  <input type="text" wire:model="nationalite"
                    class="form-control @error('nationalite') is-invalid @enderror" value="{{ old('nationalite') }}">
                  @error('nationalite')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Adresse</label>
                <div class="col-lg-9">
                  <textarea type="text" rows="2" cols="2" wire:model="adresse"
                    class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}"></textarea>
                  @error('adresse')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

            </div>
          </div>
          <h4 class="card-title">Informations professionnels</h4>
          <div class="row">
            <div class="col-xl-6">
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Matricule</label>
                <div class="col-lg-9">
                  <input type="text" wire:model="matricule"
                    class="form-control @error('matricule') is-invalid @enderror" value="{{ old('matricule') }}">
                  @error('matricule')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="form-group row">
                <label class="col-lg-3 col-form-label">Téléphone</label>
                <div class="col-lg-9">
                  <input type="number" wire:model="telephone"
                    class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}">
                  @error('telephone')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
