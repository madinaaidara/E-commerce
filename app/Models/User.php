<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function commandes()
{
    return $this->hasMany(Commande::class, 'utilisateurId');
}

public function paniers()
{
    return $this->hasMany(Panier::class, 'utilisateurId');
}

public function admin()
{
    return $this->hasOne(Admin::class, 'utilisateurId');
}

public function client()
{
    return $this->hasOne(Client::class, 'utilisateurId');
}

public function visiteur()
{
    return $this->hasOne(Visiteur::class, 'utilisateurId');
}

public function livreur()
{
    return $this->hasOne(Livreur::class, 'utilisateurId');
}

}
