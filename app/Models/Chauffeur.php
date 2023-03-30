<?php

namespace App\Models;

use App\Models\User;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $table = "chauffeurs";
    protected $fillable = ["statut"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function trajet(){
        return $this->belongsTo(Trajet::class);
    }
}
