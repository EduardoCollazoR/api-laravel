<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    const BORRADOR = 1;
    const PUBLICADO = 2;


    //relacion 1 : n inversa
    public function user()
    {
        $this->belongsTo(Users::class);
    }
    public function category()
    {
        $this->belongsTo(Category::class);
    }

    //relacion n:n
    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }

    //relacion 1 : n polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
