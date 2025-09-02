<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'adresse',
        'numtel',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relations
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'utilisateurId');
    }

    public function paniers()
    {
        return $this->hasMany(Panier::class, 'utilisateurId');
    }

    // Méthodes pratiques pour vérifier le rôle
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isClient()
    {
        return $this->role === 'client';
    }

    public function isLivreur()
    {
        return $this->role === 'livreur';
    }
}
