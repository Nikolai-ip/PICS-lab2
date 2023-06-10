<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'code', 'tag', 'content', 'date', 'author'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
