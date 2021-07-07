<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    public function habilitationPersonnel(){
        return $this->belongsTo(HabilitationPersonnel::class);
    }
}
