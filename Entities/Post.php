<?php

namespace Basic\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [];
    protected function getAuthorAttribute ()
    {
        return 'Marden Cavalcante';
    }
}
