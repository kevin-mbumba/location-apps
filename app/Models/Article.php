<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Article extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function type()
    {
        return $this->belongsTo(TypeArticle::class,"type_article_id","id");
    }

    public function tarifications()
    {
        return $this->hasMany(Tarification::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class,"article_location","article_id","location_id");
    }

    public function propriete()
    {
        return $this->belongsToMany(ProprieteArticle::class,"article_propriete","article_id","propriete_id");
    }
    
}
