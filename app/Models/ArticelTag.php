<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticelTag extends Model
{
    use HasFactory;
    protected $table = 'articel_tag';
    protected $fillable = [
        'article_id',
        'tag_id'
    ];

    public function articel()
    {
        return $this->belongsTo(Articel::class, 'article_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
