<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    public function proyectos()
{
    return $this->hasMany(Proyecto::class);
}

}
