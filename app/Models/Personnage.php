<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    public $fillable = ['prenom', 'nom', 'sexe', 'type_id', 'imgUrl', 'vie', 'attaque', 'defense', 'vitesse', 'attaque_nbr1', 'attaque_nbr2', 'attaque_nbr3', 'attaque_nbr4'];

    public function attaques(){
        return $this->belongsToMany(Attaque::class);
    }
}
