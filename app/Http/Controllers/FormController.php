<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Form;
use App\Http\Requests\FormRequest;

class FormController extends Controller
{
    public function post(FormRequest $request, Form $form)
    {
        $input = $request->all();
        $content_id = $input['_content_id'];

        unset($input['_token']);
        unset($input['Submit']);
        unset($input['_content_id']);

        $json = json_encode($input);
        
        $form->insert(['content_id' => $content_id, 'value' => $json,
            'created_at' => new \DateTime(), 'updated_at' =>  new \DateTime()]);
        

    }
}
