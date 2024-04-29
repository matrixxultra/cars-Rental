<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthTraits;

class Admin extends Model implements AuthTraits
{

    use HasFactory;
    use Authenticatable;
    protected $fillable = [
        'name',
        "prenom",
        'email',
        "phone_number",
        "cin",
        "addresse",
        'password'
    ];

}
