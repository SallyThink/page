<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function getContentId()
    {
        $array =  $this->get();
        $result = [];

        foreach($array as $k=>$v)
        {
            $result[$v->id] = $v->content_name;
        }

        return $result;
    }
}
