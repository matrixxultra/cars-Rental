<?php

namespace App\Models;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        "gamme"
    ];

    public function voitures(){
        return $this->hasMany(Voiture::class);
    }
}
