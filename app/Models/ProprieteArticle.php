<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticle extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(TypeArticle::class,"type_article_id","id");
    }

    public function proprietes()
    {
        return $this->belongsToMany(Article::class,"article_propriete","article_id","propriete_id");
    }
}
