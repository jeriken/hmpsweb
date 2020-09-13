<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Relationship many to many dengan Tag (Kategori)
    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }

    // Relationship One to Many (inverse) dengan User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
