<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taxi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Styles -->
        <style>
            
            
        </style>
    </head>
    <body class="container mt-5">
        <div class="row">
            <a href="{{url('/admin/home')}}">Dashboard</a>
        </div>
        <div class="col-md-4 mt-5">
            <form action="{{route('trajet.store')}}" method="post">
                @csrf
                <label for="" class="labelle mt-5">Selectionner Ville</label>
                <select name="ville_id" class="form-control mt-3">
                    @foreach ($villes as $ville)
                    <option value="{{$ville->id}}">
                        {{$ville->nom_Ville}}
                    </option>
                    @endforeach
                </select>
                <label for="" class="labelle mt-3">Depart</label>
                <input type="text" name="Depart" placeholder="Saisir depart" class="form-control mt-3">
                <label for="" class="labelle mt-3">Arriver</label>
                <input type="text" name="Arriver" placeholder="Saisir arriver" class="form-control mt-3">
                <label for="" class="labelle mt-3">code_Vehicule</label>
                <input type="text" name="code_Vehicule" placeholder="Saisir le code du vehicule" class="form-control mt-3">
                <label for="" class="labelle mt-3">Prix</label>
                <input type="number" name="Prix" placeholder="Saisir prix" class="form-control mt-3">
                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
            </form>
        </div>

        <div>
            <table class="table mt-5 col-md-3">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Ville</td>
                        <td>Depart</td>
                        <td>Arriver</td>
                        <td>Vehicule</td>
                        <td>Prix</td>
                        <td>Option</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trajet as $trajet)
                    <tr>
                        <td>{{$trajet['id']}}</td>
                        <td>{{$trajet->ville->nom_Ville}}</td>
                        <td>{{$trajet['Depart']}}</td>
                        <td>{{$trajet['Arriver']}}</td>
                        <td>{{$trajet['code_Vehicule']}}</td>
                        <td>{{$trajet['Prix']}}</td>
                        <td>
                            <a href="{{route('trajet.delete', ['id'=>$trajet->id])}}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>