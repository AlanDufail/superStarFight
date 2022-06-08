<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attaque extends Model
{
    public $fillable = ['nom', 'type', 'degats', 'precision', 'critique'];

    public function characters(){
        return $this->belongsToMany(Personnage::class);
    }
}
