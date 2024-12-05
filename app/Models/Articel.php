<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->hasMany(Articel_Category::class, 'article_id');
    }
}
