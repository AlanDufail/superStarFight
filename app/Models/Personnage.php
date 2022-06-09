<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    public $fillable = ['prenom', 'nom', 'sexe','imgUrl', 'vie', 'attaque', 'defense', 'vitesse'];

    public $timestamps = false;

    public function attaques(){
        return $this->belongsToMany(Attaque::class);
    }
}
