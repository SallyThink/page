<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

abstract class DefaultController extends Controller implements AdminInterface
{
    abstract public function all();
    abstract public function new();
    abstract public function create();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function delete($id);

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
