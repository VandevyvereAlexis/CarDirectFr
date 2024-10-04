<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'commentaire',
        'user1_id',
        'user2_id',
    ];

    /*
     * Récupère l'utilisateur qui a rédigé cet avis.
     * Relation avec User (un avis est rédigé par un utilisateur).
     */
    public function auteur(){
        return $this->belongsTo(User::class, 'user1_id');
    }

    /*
     * Récupère l'utilisateur destinataire de cet avis.
     * Relation avec User (un avis est adressé à un autre utilisateur).
     */
    public function destinataire(){
        return $this->belongsTo(User::class, 'user2_id');
    }
}
