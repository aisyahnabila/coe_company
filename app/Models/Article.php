<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug', 'featured_img', 'category', 'user_id', 'category_articles'];

    public function category()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_id');
    }
}
