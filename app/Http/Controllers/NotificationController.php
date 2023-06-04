<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NotificationController extends Controller
{

  public function index()
  {
    return view("pages.admin.notifications.index");
  }

  public function store(Request $request)
  {
    $request->validate([
      'fichier_excel' => 'required|mimes:xlsx,xls,csv',
    ]);
    $file = $request->file('fichier_excel');
    $data = Excel::toArray([], $file);
    $telephones = [];
    foreach ($data[0] as $row) {
      array_push($telephones, strval($row[3]));
    }
    // return $telephones;


    $message = $request->message;

    $payload = [
      "messages" => [
        [
          "channel" => "sms",
          "recipients" => $telephones,
          "content" => $message,
          "msg_type" => "text",
          "data_coding" => "text"
        ]
      ],
      "message_globals" => [
        "originator" => "ESTFBS",
        "report_url" => "https://the_url_to_receive_delivery_report.com"
      ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.d7networks.com/messages/v1/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($payload),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJhdXRoLWJhY2tlbmQ6YXBwIiwic3ViIjoiMzZkNWNlYzYtNjc3Ni00YzdhLTk2MGMtODRlYzY3MWE2NGJkIn0.So4HWR1Bo_0nb1Pkj7elUO_LDM6xnxKLABKwO60_TNw'
      ),
    ));

    $response = curl_exec($curl);


    curl_close($curl);
    toastr()->success('Les messages ont été envoyés avec succès');

    return redirect()->route("notifications.index");
  }
}
