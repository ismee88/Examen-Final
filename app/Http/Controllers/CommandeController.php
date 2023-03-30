<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function valider($id)
    {
        $chauffeur = Commande::findOrFail($id);
        $chauffeur->statut = 1;
        $chauffeur->save();

        return redirect('/admin/home');
    }

    public function delete($id){
        $chauffeur = Commande::FindOrFail($id);
        $chauffeur -> delete();
        return redirect('/home');
    }
}
