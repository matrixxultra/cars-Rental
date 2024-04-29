<?php

namespace App\Models;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;
    protected $fillable= [
        "pics"
    ];
    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }
}
