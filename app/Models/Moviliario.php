<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moviliario extends Model
{
    protected $table = 'moviliario';
    
    public function aulas()
    {
        return $this->belongsToMany(Aula::class);
    }
}
