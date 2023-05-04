<?php

namespace App\Imports;

use App\Exports\EtudiantsExport;
use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Excel;


class EtudiantsImport implements ToCollection
{

  public function collection(Collection $rows)
  {
    $students = [];

    foreach ($rows as $row) {
      $students[] = [
        'NO' => $row[0],
        'CODE MASSAR' => $row[1],
        'NOM' => $row[2],
        'PRENOM' => $row[3],
        'NOM ARABE' => $row[4],
        'PRENOM ARABE' => $row[5],
        'CIN' => $row[6],
      ];
    }
    // Sort the array of students by last name
    usort($students, function ($a, $b) {
      return strcmp($a['last_name'], $b['last_name']);
    });

    // Split the array of students into chunks of 100
    $chunks = array_chunk($students, 2);

    // Loop through each chunk and create a new Excel file
    foreach ($chunks as $key => $chunk) {
      $data = [
        ['NO', 'CODE MASSAR', 'NOM', 'PRENOM', 'NOM ARABE', 'PRENOM ARABE', 'CIN'],
      ];

      foreach ($chunk as $student) {
        $data[] = [
          $student['NO'],
          $student['CODE MASSAR'],
          $student['NOM'],
          $student['PRENOM'],
          $student['NOM ARABE'],
          $student['PRENOM ARAB'],
          $student['CIN'],
        ];
      }

      return $data;
      // Create a new Excel file and add the data to the first sheet
      $filename = 'students_' . ($key + 1) . '.xlsx';
      Excel::download(new EtudiantsExport($data), $filename, Excel::XLSX);
    }
  }
}
