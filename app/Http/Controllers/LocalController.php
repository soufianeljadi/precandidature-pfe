<?php

namespace App\Http\Controllers;

use App\Exports\EtudiantsExport;
use App\Imports\EtudiantsImport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;

class LocalController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view("pages.admin.locaux.index");
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */

  public function store(Request $request)
  {
    $request->validate([
      "excel_file" => "required",
      // 'inputField.*.input1' => 'required',
      // 'inputField.*.input2' => 'required',
    ]);
    $file = $request->file('excel_file');
    $data = Excel::toArray([], $file);
    // Remove metadata row
    array_shift($data[0]);

    // Sort by the "NOM" column
    usort($data[0], function ($a, $b) {
      return $a[2] <=> $b[2];
    });


    $inputField1 = $request->input('inputField1');
    $inputField2 = $request->input('inputField2');
    $chunks = [];
    foreach ($inputField2 as $index => $value) {
      $chunkSize = $value;
      $chunk = array_slice($data[0], 0, $chunkSize);
      $chunks[$inputField1[$index]] = $chunk;
      $data[0] = array_slice($data[0], $chunkSize);
      if (empty($data[0])) {
        break;
      }
    }
    foreach ($chunks as $filename => $chunk) {
      $file_handle = fopen($filename.'.csv', 'w, , encoding="UTF-16"');
      foreach ($chunk as $row) {
        fputcsv($file_handle, $row);
      }
      fclose($file_handle);
    }


     // Write the chunks to the CSV file the previous
    // foreach ($chunks as $index => $chunk) {
    //   $filename = 'local_' . $index + 1 . '.csv';
    //   $file_handle = fopen($filename, 'w, , encoding="UTF-16"');
    //   foreach ($chunk as $row) {
    //     fputcsv($file_handle, $row);
    //   }
    // }
    // fclose($file_handle);
    toastr()->success('Les fichiers sont enregistrés avec succès dans le dossier public!');

    return redirect()->route("locaux.index");


    // foreach ($chunks as $index => $chunk) {
    //   $filename = 'students_' . ($index + 1) . '.txt';
    //   $file = fopen(public_path($filename), 'w');
    //   foreach ($chunk as $student) {
    //     fwrite($file, implode("\t", $student) . "\n");
    //   }
    //   fclose($file);
    // }



    // $filename = 'students_1.txt'; // replace with your file name
    // $path = public_path($filename);

    // $file = fopen($path, "r");

    // $data = array();

    // while (!feof($file)) {
    //   $row = fgetcsv($file, 0, "\t");

    //   if ($row) {
    //     $data[] = $row;
    //   }
    // }

    // fclose($file);
    // $collection = new Collection($data);

    // Excel::store($collection, 'file.xlsx');




  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
