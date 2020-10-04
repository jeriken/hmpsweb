<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Yang boleh diisi di dalam tabel Tag
    protected $fillable = [
        'tag_name',
    ];

    // Relationship many to many dengan article dan berita
    public function article()
    {
        return $this->belongsToMany('App\Article');
    }

    public function berita()
    {
        return $this->belongsToMany('App\Berita');
    }
}
