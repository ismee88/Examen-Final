<?php

namespace App\Models;

use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $table = "villes";
    protected $fillable = ["nom_Ville"];

    public function trajets(){
        return $this->hasMany(Trajet::class, 'ville_id', 'id');
    }
}
