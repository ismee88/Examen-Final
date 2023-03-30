<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Commande;
use App\Models\Trajet;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        $commandes = Commande::all();
        $users = User::all();
        $villes = Ville::pluck('nom_ville', 'id');
        $trajets = Trajet::join('villes', 'trajets.ville_id', '=', 'villes.id')
            ->where('villes.id', request('ville'))
            ->select('trajets.id', 'trajets.Depart', 'trajets.Arriver', 'trajets.Prix')
            ->get()
            ->mapWithKeys(function ($trajet) {
                return [$trajet->id => "$trajet->Depart - $trajet->Arriver ($trajet->Prix FCFA)"];
            });
        return view('home', compact('users', 'villes', 'trajets', 'commandes'));
    }

    public function userStore(Request $request){
        $commande = new Commande();
        $commande->user_id = $request->user_id;
        $commande->trajet_id = $request->trajet_id;
        $commande->save();
        return redirect('/home')->with('success', 'Votre demande a bien été reçu par nos équipes. Nous
        traitons votre demande dans les plus brefs délais.');;
    }
    


    public function driverHome(){
        $chauffeurs = Chauffeur::all();
        $users = User::all();
        $villes = Ville::pluck('nom_ville', 'id');
        $trajets = Trajet::join('villes', 'trajets.ville_id', '=', 'villes.id')
            ->where('villes.id', request('ville'))
            ->select('trajets.id', 'trajets.Depart', 'trajets.Arriver', 'trajets.Prix')
            ->get()
            ->mapWithKeys(function ($trajet) {
                return [$trajet->id => "$trajet->Depart - $trajet->Arriver ($trajet->Prix €)"];
            });
        return view('driver.home', compact('users', 'villes', 'trajets', 'chauffeurs'));
    }
    public function driverStore(Request $request){
        $chauffeur = new Chauffeur();
        $chauffeur->user_id = $request->user_id;
        $chauffeur->trajet_id = $request->trajet_id;
        $chauffeur->save();
        return redirect('/driver/home')->with('success', 'Votre demande a bien été reçu par nos équipes. Nous
        traitons votre demande dans les plus brefs délais.');;
    }


    public function adminHome(){
        $chauffeurs = Chauffeur::all();
        $commandes = Commande::all();
        $users = User::all();
        $trajets = Trajet::all();
        return view('admin.home', compact('users', 'trajets', 'chauffeurs', 'commandes'));
    }
}
