<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /*
     * Récupère les utilisateurs associés à ce rôle.
     * Relation avec User (un rôle peut être attribué à plusieurs utilisateurs).
     */
    public function utilisateurs()
    {
        return $this->hasMany(User::class);
    }
}
