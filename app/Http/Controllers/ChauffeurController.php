<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function valider($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        $chauffeur->statut = 1;
        $chauffeur->save();

        return redirect('/admin/home');
    }

    public function delete($id){
        $chauffeur = Chauffeur::FindOrFail($id);
        $chauffeur -> delete();
        return redirect('/driver/home');
    }
}
