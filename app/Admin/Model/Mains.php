<?php

namespace App\Admin\Model;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Mains extends Model
{
    protected $fillable = ['text','header','menu','background'];

    public function getPages()
    {
        return $this->select('id')->get();
    }
}

