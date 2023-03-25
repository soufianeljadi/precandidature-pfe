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
          <li class="breadcrumb-item active">Tous Les enseignants</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Page Header -->
  {{-- <div class="row">
    <div class="col-xl-6 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <h4 class="card-title">Basic Form</h4>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">First Name</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Last Name</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Email Address</label>
              <div class="col-lg-9">
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Username</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Password</label>
              <div class="col-lg-9">
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Repeat Password</label>
              <div class="col-lg-9">
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <h4 class="card-title">Address Form</h4>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Address 1</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Address 2</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">City</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">State</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Country</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label">Postal Code</label>
              <div class="col-lg-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">l'ajoute d'un enseignant</h4>
        </div>
        <div class="card-body">
          <h4 class="card-title">Informations personnel</h4>
          <form action="{{ route('enseignant.create') }}" method="GET">
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Nom</label>
                  <div class="col-lg-9">
                    <input type="text" name ="nom"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Prénom</label>
                  <div class="col-lg-9">
                    <input type="text" name ="nom"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Date de naissance</label>
                  <div class="col-lg-9">
                    <input type="date" name ="date_naissance"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">l'âge</label>
                  <div class="col-lg-9">
                    <input type="number" name ="age"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Nationalité</label>
                  <div class="col-lg-9">
                    <input type="text" name ="nationalite"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Ville</label>
                  <div class="col-lg-9">
                    <input type="text" name ="ville"class="form-control">
                  </div>
                </div>

              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label">L'adresse</label>
                    <div class="col-lg-9">
                      <input type="text" name ="adresse"class="form-control">
                    </div>
                  </div>
                  <label class="col-lg-3 col-form-label">CIN</label>
                  <div class="col-lg-9">
                    <input type="text" name ="cin"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Email</label>
                  <div class="col-lg-9">
                    <input type="email" name ="email"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Telephone</label>
                  <div class="col-lg-9">
                    <input type="number" name ="telephone"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Mot de passe</label>
                  <div class="col-lg-9">
                    <input type="password" name ="password"class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Répéter le mot de passe</label>
                  <div class="col-lg-9">
                    <input type="password" name ="password"class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <h4 class="card-title">Informations professionnel</h4>
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Matricule</label>
                  <div class="col-lg-9">
                    <input type="text" name ="matricule"class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"> --}}
          {{-- <h4 class="card-title">Two Column Horizontal Form</h4>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col-xl-6">
                <h4 class="card-title">Personal Details</h4>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">First Name</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Last Name</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Password</label>
                  <div class="col-lg-9">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">State</label>
                  <div class="col-lg-9">
                    <select class="select">
                      <option>Select State</option>
                      <option value="1">California</option>
                      <option value="2">Texas</option>
                      <option value="3">Florida</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">About</label>
                  <div class="col-lg-9">
                    <textarea rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <h4 class="card-title">Personal details</h4>
                <div class="row">
                  <label class="col-lg-3 col-form-label">Name</label>
                  <div class="col-lg-9">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="First Name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Last Name" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Email</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Phone</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Address</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control m-b-20">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="select">
                            <option>Select Country</option>
                            <option value="1">USA</option>
                            <option value="2">France</option>
                            <option value="3">India</option>
                            <option value="4">Spain</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="ZIP code" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="State/Province" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="City" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form> --}}
        </div>
      </div>
    </div>
  </div>



  <!-- /Page Wrapper -->

  {{-- Contennt --}}
@endsection
