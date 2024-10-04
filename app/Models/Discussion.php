<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user1_id',
        'user2_id',
    ];

    /*
     * Récupère l'utilisateur initiateur de la discussion.
     * Relation avec User (une discussion a un utilisateur initiateur).
     */
    public function initiateur()
    {
        return $this->belongsTo(User::class, 'user1_id');
    }

    /*
     * Récupère l'utilisateur destinataire de la discussion.
     * Relation avec User (une discussion a un utilisateur destinataire).
     */
    public function destinataire()
    {
        return $this->belongsTo(User::class, 'user2_id');
    }


    /*
     * Récupère les messages associés à cette discussion.
     * Relation avec Message (une discussion peut avoir plusieurs messages).
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
