<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class,"user_id","id");
    } 

    public function client()
    {
        $this->belongsTo(Client::class,"client_id","id");
    }
    public function statut()
    {
        $this->belongsTo(StatutLocation::class,"statut_location_id","id");
    }
    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class,"article_location","location_id","article_id");
    }
}
