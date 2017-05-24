<?php

namespace App\Classes;

use Illuminate\Http\UploadedFile;

class Image
{

    protected $uploadDir = 'images/uploads';

    /**
     * Save image
     *
     * @param UploadedFile $file
     * @param $name
     */
    public function save($file, $name)
    {
        $file->move($this->uploadDir, $name);
    }
}
