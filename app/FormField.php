<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    public function getFormFields()
    {
        $forms = $this->select('*')->get();

        $result = [];
        foreach($forms as $k=>$v)
        {
            $result[$v->content_id][$k]['name'] = $v->name;
            $result[$v->content_id][$k]['type'] = $v->type;
            $result[$v->content_id][$k]['value'] = $v->value;
            $result[$v->content_id][$k]['placeholder'] = $v->placeholder;
            $result[$v->content_id][$k]['background_color'] = $v->background_color;
            $result[$v->content_id][$k]['border'] = $v->border;
        }

        return $result;
    }
}
