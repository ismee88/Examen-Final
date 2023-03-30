@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="card-header">
            <h3>Dashboard | Bienvenu {{Auth::user()->name}} {{Auth::user()->first_name}} </h3>
        </div>
    
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <a href="{{url('/admin/ville')}}" class="btn btn-primary" style="width: 40%">Ville</a>
            <a href="{{url('/admin/trajet')}}" class="btn btn-primary" style="width: 40%">Trajet</a>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="card-header"><h3>Chauffeur</h3></div>
        <table class="table mt-2 col-md-3">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Prenom</td>
                    <td>Nom</td>
                    <td>Ville</td>
                    <td>Depart</td>
                    <td>Arriver</td>
                    <td>Prix</td>
                    <td>Etat</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($chauffeurs as $chauffeur)
                <tr>
                    <td>{{$chauffeur['id']}}</td>
                    <td>{{$chauffeur->user->name}}</td>
                    <td>{{$chauffeur->user->first_name}}</td>
                    <td>{{$chauffeur->trajet->ville->nom_Ville}}</td>
                    <td>{{$chauffeur->trajet->Depart}}</td>
                    <td>{{$chauffeur->trajet->Arriver}}</td>
                    <td>{{$chauffeur->trajet->Prix}} FCFA</td>
                    @if ($chauffeur->statut == 0)
                        <td>
                            Non valider
                        </td>
                    @else
                        <td>
                            Valider
                        </td>
                    @endif
                    <td>
                        <form method="POST" action="{{ route('chauffeur.valider', ['id' => $chauffeur->id]) }}">
                            @csrf
                            @if ($chauffeur->statut == 0)
                                <button type="submit" class="btn btn-success btn-sm">Valider</button>
                            @else
                                <button type="submit" class="btn btn-success btn-sm" disabled>Valider</button>
                            @endif
                        </form>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
    <div class="row mt-5">
        <div class="card-header"><h3>Commande</h3></div>
        <table class="table mt-2 col-md-3">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Prenom</td>
                    <td>Nom</td>
                    <td>Ville</td>
                    <td>Depart</td>
                    <td>Arriver</td>
                    <td>Prix</td>
                    <td>Etat</td>
                    <td>Option</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                <tr>
                    <td>{{$commande['id']}}</td>
                    <td>{{$commande->user->name}}</td>
                    <td>{{$commande->user->first_name}}</td>
                    <td>{{$commande->trajet->ville->nom_Ville}}</td>
                    <td>{{$commande->trajet->Depart}}</td>
                    <td>{{$commande->trajet->Arriver}}</td>
                    <td>{{$commande->trajet->Prix}} FCFA</td>
                    @if ($commande->statut == 0)
                        <td>
                            Non valider
                        </td>
                    @else
                        <td>
                            Valider
                        </td>
                    @endif
                    <td>
                        <form method="POST" action="{{ route('commande.valider', ['id' => $commande->id]) }}">
                            @csrf
                            @if ($commande->statut == 0)
                                <button type="submit" class="btn btn-success btn-sm">Valider</button>
                            @else
                                <button type="submit" class="btn btn-success btn-sm" disabled>Valider</button>
                            @endif
                        </form>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
