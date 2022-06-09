<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombatPersonnage extends Model
{
    use HasFactory;

    public function personnage1()
    {
        return $this->belongsTo(Personnage::class, 'personnage_id');
    }
    public function personnage2()
    {
        return $this->belongsTo(Personnage::class, 'personnage2_id');
    }
    public function viePersonnage()
    {
        return $this->hasMany(ViePersonnage::class, 'combat_id');
    }
}
