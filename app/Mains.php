<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mains extends Model
{
    protected $fillable = ['page_name', 'background_color', 'background_image', 'created_at', 'updated_at'];

    public function main()
    {
        return $this->select('mains.id', 'mains.page_name', 'mains.background_color', 'mains.background_image', 'fonts.font_name', 'fonts.font_url')
            ->leftJoin('fonts','fonts.id','=','mains.font_id')->where('mains.published','1')->get();
    }

    public function selectPage()
    {
        $pages = $this->select('id', 'page_name')->get();
        $selectPage = [''];

        foreach($pages as $value)
        {
            $selectPage[$value->id] = $value->page_name;
        }

        return $selectPage;
    }
}
