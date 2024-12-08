<?php

namespace App\Actions;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PostAction
{
    public function __invoke(UploadedFile $path): string
    {
        $pathName = Storage::putFile('public/application', $path);
        $fieldPath = '/storage/application/' . basename($pathName);
        return $fieldPath;
    }
}