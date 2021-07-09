<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model
{
    use HasFactory, SoftDeletes;

    public function habilitations() {
        return $this->belongsToMany(Habilitation::class, 'habilitation_personnel')
            ->withPivot('date_obtention', 'date_fin_validite');
    }
}
