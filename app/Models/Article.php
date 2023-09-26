<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

   /* protected $fillable = [
        'nom',
        'noSerie',
        'imageUrl',
        'estDisponible',
        'type_article_id',
    ]; */
    public $timestamps = false;
}
