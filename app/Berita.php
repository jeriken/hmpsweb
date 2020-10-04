<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // Model berita untuk tabel 'berita
    protected $table = 'berita';

    // Yang boleh diisi di dalam tabel Berita
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
