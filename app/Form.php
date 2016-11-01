<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function getLastFormNumber()
    {
        return $this->select('form_number')->orderby('form_number','desc')->limit(1)->get();
    }
}
