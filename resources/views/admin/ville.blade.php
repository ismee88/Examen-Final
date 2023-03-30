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
            <form action="{{route('ville.store')}}" method="post">
                @csrf
                <label for="" class="labelle">Ville</label>
                <input type="text" name="nom_Ville" placeholder="Saisir ville" class="form-control mt-3">
                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
            </form>
        </div>

        <div>
            <table class="table mt-5 col-md-3">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Ville</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ville as $ville)
                    <tr>
                        <td>{{$ville['id']}}</td>
                        <td>{{$ville['nom_Ville']}}</td>
                        <td>
                            <a href="{{route('ville.delete', ['id'=>$ville->id])}}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>