<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attaque extends Model
{
    public $fillable = ['nom','degats', 'precision', 'critique'];

    public $timestamps = false;

    public function personnages(){
        return $this->belongsToMany(Personnage::class);
    }
}
