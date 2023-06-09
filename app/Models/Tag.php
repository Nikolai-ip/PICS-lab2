<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['tag_title', 'code'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
