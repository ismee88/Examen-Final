<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Chauffeur;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $table = "trajets";
    protected $fillable = [
        "Depart",
        "Arriver",
        "code_Vehicule",
        "Prix",
    ];

    public function ville(){
        return $this->belongsTo(Ville::class, 'ville_id', 'id');
    }

    public function chauffeur(){
        return $this->hasOne(Chauffeur::class);
    }

    public function commande(){
        return $this->hasOne(Commande::class);
    }
}
