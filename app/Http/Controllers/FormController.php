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
        unset($input['_token']);
        unset($input['Submit']);
        
        $json = json_encode($input);
        
        $form->insert(['form_number' => 1, 'content_id' => $input['_content_id'], 'value' => $json,
            'created_at' => new \DateTime(), 'updated_at' =>  new \DateTime()]);
        

    }
}
