<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    public function habilitations() {
        return $this->belongsToMany(Habilitation::class, 'habilitation_personnel')
            ->withPivot('date_obtention', 'date_fin_validite');
    }
}
