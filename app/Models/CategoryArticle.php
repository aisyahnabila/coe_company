<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    use HasFactory;

    protected $table = 'category_article';

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
