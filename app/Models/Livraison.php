<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    public function commande()
{
    return $this->belongsTo(Commande::class, 'commandeId');
}

}
