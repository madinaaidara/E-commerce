<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
protected $fillable = [
    'nom', 'prix', 'categorie', 'description'
];

public function categorie()
{
    // Define the relationship here if needed
}

}
