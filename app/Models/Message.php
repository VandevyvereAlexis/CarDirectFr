<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'lu',
        'texte',
        'user_id',
        'discussion_id'
    ];

    /*
     * Récupère l'utilisateur qui a envoyé ce message.
     * Relation avec User (un message appartient à un utilisateur).
     */
    public function auteur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*
     * Récupère la discussion à laquelle ce message appartient.
     * Relation avec Discussion (un message appartient à une discussion).
     */
    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
}
