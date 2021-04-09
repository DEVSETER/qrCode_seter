<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilitation extends Model
{
    use HasFactory;

    public function personnels() {
        return $this->belongsToMany(Personnel::class);
    }
}