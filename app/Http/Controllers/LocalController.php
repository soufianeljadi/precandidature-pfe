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
    $file = $request->file('excel_file');
    $data = Excel::toArray([], $file);
    // Remove metadata row
    array_shift($data[0]);

    // Sort by the "NOM" column
    usort($data[0], function ($a, $b) {
      return $a[2] <=> $b[2];
    });
    $nbr_etudiants = $request->nbr_etudiants;
    // Chunk the data into files of 20 students
    $chunks = array_chunk($data[0], $nbr_etudiants);
    // Create a new CSV file


    // Write the chunks to the CSV file
    foreach ($chunks as $index => $chunk) {
      $filename = 'local_' . $index + 1 . '.csv';
      $file_handle = fopen($filename, 'w, , encoding="UTF-16"');
      foreach ($chunk as $row) {
        fputcsv($file_handle, $row);
      }
    }
    fclose($file_handle);
    toastr()->success('The Files are saved Successfully in public folder!');

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
