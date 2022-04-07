<?php

namespace App\Models;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Propriete extends Model
{
    use HasFactory;

    public function bien() : BelongsTo { //locailte_id
        return $this->belongsTo(Proprietaire::class,'proprietaire_id');
    }
  
}
