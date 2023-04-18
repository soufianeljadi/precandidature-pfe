<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait AttachFilesTrait
{
  public function uploadFile($request, $name , $folder)
  {
    $file_name = $request->file($name)->getClientOriginalName();
    $request->file($name)->storeAs('documents/',$folder . "/". $file_name, 'documents_etudiants');
  }

  public function deleteFile($name)
  {
    $exists = Storage::disk('upload_attachments')->exists('attachments/library/' . $name);

    if ($exists) {
      Storage::disk('upload_attachments')->delete('attachments/library/' . $name);
    }
  }
}
