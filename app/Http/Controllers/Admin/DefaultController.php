<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class DefaultController extends Controller
{
    /**
     * @param Model $model
     * @param FormRequest $request
     * @param int $id
     */
    protected function toSave(Model $model, FormRequest $request, $id = null)
    {
        $model->fill($request->all());
        $model->background_image = $request->get('issetImage');

        if ($file = $request->file('background_image')) {
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $model->background_image = $imageName;
        }

        $model->updateOrCreate(['id' => $id], $model->getAttributes());

        if ($file) {
            \Image::save($file, $imageName);
        }
    }
}
