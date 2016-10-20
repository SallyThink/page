<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Form extends Model
{
    public function getFormId()
    {
        $array =  $this->get();
        $result = [];

        foreach($array as $k=>$v)
        {
            $result[$v->id] = $v->name;
        }

        return $result;
    }

    public function getForms()
    {
        $forms = $this->leftJoin('form_fields','forms.id','=','form_fields.form_id')->get();

        $result = [];
        foreach($forms as $k=>$v)
        {
            $result[$v->contents_id][$k]['name'] = $v->name;
            $result[$v->contents_id][$k]['type'] = $v->type;
            $result[$v->contents_id][$k]['placeholder'] = $v->placeholder;
        }
        
        return $result;
    }
}
