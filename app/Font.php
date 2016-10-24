<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    public function getFontsId()
    {
        $result = [];

        foreach($this->select('id','font_name')->get() as $k=>$v)
        {
            $result[$v->id] = $v->font_name;
        }
        return $result;
    }
}
