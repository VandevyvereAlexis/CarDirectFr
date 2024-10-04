<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicule_id'
    ];

    /*
     * Récupère l'utilisateur qui a marqué ce véhicule comme favori.
     * Relation avec User (un favori appartient à un utilisateur).
     */
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*
     * Récupère le véhicule associé à ce favori.
     * Relation avec Vehicule (un favori est associé à un véhicule).
     */
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }
}
