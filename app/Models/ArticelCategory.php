<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticelCategory extends Model
{
    use HasFactory;
    protected $table = 'article_category';
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
