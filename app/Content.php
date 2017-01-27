<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = ['_token', '_method', 'background', 'issetImage'];

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

    /**
     * Get content with forms and positions
     *
     * @param $forms
     * @return mixed
     */
    public function getContent($forms)
    {

        $cont = $this->select('*')->orderBy('mains_id')->get();

        if(!empty($forms))
        {
            foreach($cont as &$v)
            {
                if(isset($forms[$v->id]))
                {
                    $v->form = $forms[$v->id];
                }
            }
        }


        foreach($cont as $k=>$v)
        {
            $v->positionY = $v->positionY*9.5;
        }

        return $cont;
    }
}
