<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'pseudo',
        'numero',
        'image',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /*
     * Récupère le rôle associé à cet utilisateur.
     * Relation avec Role (un utilisateur a un rôle).
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /*
     * Récupère les messages envoyés par cet utilisateur.
     * Relation avec Message (un utilisateur peut envoyer plusieurs messages).
     */
    public function avis()
    {
        return $this->hasMany(Avis::class, 'user1_id');
    }

    /*
     * Récupère les véhicules favoris de cet utilisateur.
     * Relation avec Favori (un utilisateur peut avoir plusieurs favoris).
     */
    public function favoris()
    {
        return $this->hasMany(Favoris::class);
    }
}
