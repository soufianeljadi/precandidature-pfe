<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
</head>

<body>
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
      {{-- <div class="invoice-item invoice-item-two">
        <div class="row">
          <div class="col-md-6">
            <div class="invoice-info">
              <strong class="customer-text-one">Billed to</strong>
              <h6 class="invoice-name">Customer Name</h6>
              <p class="invoice-details invoice-details-two text-start">
                9087484288 <br>
                Address line 1, <br>
                Address line 2 <br>
                Zip code ,City - Country
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="invoice-info invoice-info2">
              <strong class="customer-text-one">Payment Details</strong>
              <p class="invoice-details">
                Debit Card <br>
                XXXXXXXXXXXX-2541 <br>
                HDFC Bank
              </p>
              <div class="invoice-item-box">
                <p>Recurring : 15 Months</p>
                <p class="mb-0">PO Number : 54515454</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- /Invoice Item -->

      <!-- Invoice Item -->
      {{-- <div class="invoice-issues-box">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="invoice-issues-date">
              <p>Date du Date : 27 Jul 2022</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="invoice-issues-date">
              <p>Due Date : 27 Aug 2022</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="invoice-issues-date">
              <p>Due Amount : ₹ 1,54,22 </p>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- /Invoice Item -->

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
                    <td>{{ $candidature->etudiant->pays }}</td>
                    <td>{{ $candidature->etudiant->sexe == 1 ? 'Masculin' : 'Féminin ' }}</td>
                    <td>Ville : {{ $candidature->etudiant->ville_etudiant->nom }}</td>
                    <th>Fonctionnaire : {{ $candidature->etudiant->fonctionnaire == 1 ? 'Oui' : 'Non' }}</th>
                    <td class="text-end">$3,000</td>
                  </tr>
                  <tr>
                    <td>Ui Designer</td>
                    <td>Designing</td>
                    <td>$100 - $500</td>
                    <th>10%</th>
                    <td class="text-end">$11,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /Invoice Item -->
      {{--
      <div class="row align-items-center justify-content-center">
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
</body>

</html>
