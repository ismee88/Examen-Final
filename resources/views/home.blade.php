@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="card-header">
            <h3>Dashboard | Bienvenu {{Auth::user()->name}} {{Auth::user()->first_name}} </h3>
        </div>
    
    </div>

    <div class="row">
        <div class="mt-5 col-md-4">
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                <label for="ville">Ville :</label>
                <select name="ville" id="ville" required class="form-control">
                    <option value="">Sélectionnez une ville</option>
                    @foreach($villes as $id => $nom)
                        <option value="{{ $id }}">{{ $nom }}</option>
                    @endforeach
                </select>
                <br>
                <label for="trajet">Trajet :</label>
                <select name="trajet_id" id="trajet" required class="form-control">
                    <option value="">Sélectionnez un trajet</option>
                    @foreach($trajets as $id => $trajet)
                        <option value="{{ $id }}">{{ $trajet }}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" value="Enregistrer" class="btn btn-primary">
            </form>
            
            <script>
                const villeSelect = document.getElementById('ville');
                const trajetSelect = document.getElementById('trajet');
            
                villeSelect.addEventListener('change', (event) => {
                    const villeId = event.target.value;
                    fetch(`/trajets/${villeId}`)
                        .then(response => response.json())
                        .then(trajets => {
                            trajetSelect.innerHTML = '';
                            trajetSelect.innerHTML += '<option value="">Sélectionnez un trajet</option>';
                            trajets.forEach(trajet => {
                                trajetSelect.innerHTML += `<option value="${trajet.id}">${trajet.Depart} - ${trajet.Arriver} (${trajet.Prix} FCFA)</option>`;
                            });
                        });
                });
            </script>
            
        </div>
    </div>

    <div class="row">
        <table class="table mt-5 col-md-3">
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
                            En cours de validation
                        </td>
                    @else
                        <td>
                            Valider
                        </td>
                    @endif
                    <td>
                        <a href="{{route('user.delete', ['id'=>$commande->id])}}" class="btn btn-danger btn-sm">Annuler</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <!-- Élément pour afficher le message de succès -->
        <div id="success-message" class="alert alert-success col-md-6 offset-2">{{ session('success') }}</div>

        <!-- JavaScript pour faire disparaître le message de succès après 5 secondes -->
        <script>
            setTimeout(function() {
                document.getElementById('success-message').style.display = 'none';
            }, 6000);
        </script>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</div>
@endsection
