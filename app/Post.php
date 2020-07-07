<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['nombre', 'content', ];


    //**************
    //* Relaciones *
    //**************

    public function postcomment() 
    {
        return $this->hasMany('App\Postcomment');
    }
}
