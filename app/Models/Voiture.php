<?php

namespace App\Models;

use App\Models\User;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        "marque_id",
        "categorie_id",
        "color",
        "modele",
        "prix_location_jour",
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withPivot(["date_debut","date_fin","prix_total"])->as("info");
    }
    public function pictures(){
        return $this->hasMany(Picture::class);
    }
}
