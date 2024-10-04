<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'prix',
        'image',
        'description',
        'departement',
        'code_postal',
        'ville',
        'cv_fiscaux',
        'ch_din',
        'kilometrage',
        'annee',
        'statut',
        'Mise_en_circulation',
        'premiere_main',
        'controle_technique',
        'energie',
        'type',
        'etat',
        'place',
        'porte',
        'transmission',
        'user_id',
        'couleur_id',
        'marque_id',
        'euro_id',
        'critair_id',
    ];

    /*
     * Récupère l'utilisateur propriétaire de ce véhicule.
     * Relation avec User (un véhicule appartient à un utilisateur).
     */
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Récupère la couleur associée à ce véhicule.
     * Relation avec Couleur (un véhicule peut avoir une couleur).
     */
    public function couleur()
    {
        return $this->belongsTo(Couleur::class);
    }

    /*
     * Récupère la marque associée à ce véhicule.
     * Relation avec Marque (un véhicule peut avoir une marque).
     */
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    /*
     * Récupère le crit'air associé à ce véhicule.
     * Relation avec Critair (un véhicule peut avoir un crit'air).
     */
    public function critair()
    {
        return $this->belongsTo(Critair::class);
    }

    /*
     * Récupère l'euro associé à ce véhicule.
     * Relation avec Euro (un véhicule peut avoir une catégorie euro).
     */
    public function euro()
    {
        return $this->belongsTo(Euro::class);
    }
}
