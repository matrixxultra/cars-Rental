<?php

namespace App\Models;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "image"
    ];

    public function voitures(){
        return $this->hasMany(Voiture::class);
    }
}
