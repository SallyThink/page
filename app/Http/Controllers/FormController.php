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
        $lastFormNumber = $form->getLastFormNumber();
        $lastFormNumber = ++$lastFormNumber[0]->form_number;
        $input = $request->all();
        unset($input['_token']);
        foreach($input as $k => $v)
        {
            $form->insert(['form_number' => $lastFormNumber, 'content_id' => $input['_content_id'], 'name' => $k, 'value' => $v,
            'created_at' => new \DateTime(), 'updated_at' =>  new \DateTime()]);
        }

    }
}
