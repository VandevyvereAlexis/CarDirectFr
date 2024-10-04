<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /*
     * Récupère les véhicules associés à cette marque.
     * Relation avec Vehicule (une marque peut avoir plusieurs véhicules).
     */
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
