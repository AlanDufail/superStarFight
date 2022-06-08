<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $fillable = ['nom', 'faibleContre', 'resistantContre'];

    public $timestamps = false;
}
