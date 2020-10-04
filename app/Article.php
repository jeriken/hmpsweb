<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Yang boleh diisi di dalam tabel Article
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

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
