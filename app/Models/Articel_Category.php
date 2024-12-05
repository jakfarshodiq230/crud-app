<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel_Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'category_id'
    ];

    public function articel()
    {
        return $this->belongsTo(Articel::class, 'article_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
