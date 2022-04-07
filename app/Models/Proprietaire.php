<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Proprietaire extends Model
{
    use HasFactory;
<<<<<<< HEAD

     
    public function proprietaires()
    {
        return $this->hasMany(Propriete::class);

    }
}
=======
    protected $guarded = ['id'];
}
>>>>>>> d01f7457f846d35005168769f7f159989e171da0
