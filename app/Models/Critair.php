<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critair extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /*
     * Récupère les véhicules associés à ce critère.
     * Relation avec Vehicule (un critère peut être associé à plusieurs véhicules).
     */
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
