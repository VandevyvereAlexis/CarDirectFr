<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    use HasFactory;

    protected $fillable = ['name',];

    /*
     * Récupère les véhicules associés à cette couleur.
     * Relation avec Vehicule (une couleur peut être associée à plusieurs véhicules).
     */
    public function vehicules() {
        return $this->hasMany(Vehicule::class);
    }
}
