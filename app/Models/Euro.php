<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Euro extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /*
     * Récupère les véhicules associés à cette unité monétaire.
     * Relation avec Vehicule (un euro peut être associé à plusieurs véhicules).
     */
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
