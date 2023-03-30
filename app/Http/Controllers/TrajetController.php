<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Ville;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function index(){
        $trajet = Trajet::all();
        $villes = Ville::all();
        return view('admin.trajet', compact('villes', 'trajet'));
    }

    public function store(Request $request){
        $ville = Ville::findOrFail($request->ville_id);
      
        $trajet = new Trajet();

        $trajet->Depart = $request->Depart;
        $trajet->Arriver = $request->Arriver;
        $trajet->code_Vehicule = $request->code_Vehicule;
        $trajet->Prix = $request->Prix;

        $ville->Trajets()->save($trajet);

        return redirect('/admin/trajet');
    }

    public function delete($id){
        $trajet = Trajet::FindOrFail($id);
        $trajet -> delete();
        return redirect('/admin/trajet');
    }

    public function getByVille($villeId)
    {
        $trajets = Trajet::where('ville_id', $villeId)->get(['id', 'Depart', 'Arriver', 'Prix']);
        return response()->json($trajets);
    }

}
