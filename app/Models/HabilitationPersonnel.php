<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabilitationPersonnel extends Model
{
    use HasFactory;

    protected $table = 'habilitation_personnel';

    public function actions(){
        return $this->hasMany(Action::class);
    }


}
