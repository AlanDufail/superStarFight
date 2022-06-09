<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViePersonnage extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function combatPersonnages()
    {
        return $this->belongsTo(CombatPersonnage::class, 'combat_id' , 'id');
    }
}
