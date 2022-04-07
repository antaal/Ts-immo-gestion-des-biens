<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Proprietaire extends Model
{
    use HasFactory;

     
    public function proprietaires()
    {
        return $this->hasMany(Propriete::class);

    }
}
