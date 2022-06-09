<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViePersonnage extends Model
{
    use HasFactory;

    public function combatPersonnages()
    {
        return $this->belongsTo(CombatPersonnage::class, 'id');
    }
}
