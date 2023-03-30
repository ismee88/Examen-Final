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
    <body>
        <section class="section1">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <img class="logo" src="/images/logo.png" alt="Logo de mon site">
                </div>
                <div class="col-md-9 mt-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link nav1" href="{{url('/passager')}}">Passagers</a>
                            <a class="nav-link nav2" href="{{url('/passager')}}">Comment ça marche</a>
                            <a class="nav-link nav2" href="{{url('/passager')}}">Nos prix & engagements</a>
                        </li>
                        <span class="vr"></span>
                        <li class="nav-item">
                            <a class="nav-link nav1" href="{{url('/chauffeur')}}">Chauffeurs</a>
                            <a class="nav-link nav2" href="{{url('/chauffeur')}}">Comment ça marche</a>
                        </li>
                        <span class="vr"></span>
                        <li class="nav-item">
                            <a class="nav-link nav1" href="{{url('/apropos')}}">A propos</a>
                        </li>
                        <span class="vr"></span>

                        @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link nav1" href="{{('/')}}">Accueil</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav1" href="{{('login')}}">Se connecter</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav1" href="{{('register')}}">S'inscrire</a>
                                </li>
                            @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row text1">
                <h1 class="h1-text1">Bienvenue sur le réseau Faster</h1>
                <p class="p1">
                    Rejoignez-nous et augmentez vos revenus tout en <br>
                    gérant votre emploi du temps simplement.
                </p>
                <div class="col-md-5 mt-4">
                    <a href="{{url('/driver_register')}}" class="btn btn-inscription" style="width: 50%; padding: 10px; color: black; font-size: 20px;"><big>Devenir chauffeur Faster</big></a>
                    <a href="{{url('/driver/home')}}" class="btn btn-inscription mt-2" style="width: 50%; padding: 10px; color: black; font-size: 20px;"><big>Voir les offres</big></a>
                </div>
            </div>
        </section>
        
        <section class="section2">
            <div class="row">
                <h1 style="margin-left: 150px; font-size: 50px; margin: 70px; color: #F8B620;">Comment ça marche ?</h1>
            </div>
            <div class="row">
                <div class="col bloc">
                    <img class="section2-img3 offset-4" src="/images/ordi-icon.jpg" style="width: 28%; margin-top: 30px">
                    <div style="text-align: center; margin-top: 100px; margin-right: 95px;">
                        <p class="offset-2" style="font-size: 26px;">
                            Inscrivez-vous via notre <br>
                            plateforme. Une fois votre <br>
                            dossier validé, vous <br>
                            recevrez vos identifiants.
                        </p>
                    </div>
                </div>
                <div class="col bloc">
                    <img class="section2-img1 offset-3" src="/images/icon destination.png">
                    <div style="text-align: center; margin-top: 50px; margin-right: 20px;">
                        <p class="offset-2" style="font-size: 26px;">
                            Téléchargez l’application Faster Pro <br>
                            puis saisissez vos identifiants. Suivez <br>
                            toutes les instructions d’utilisation de <br>
                            l’application. 
                        </p>
                    </div>
                </div>
                <div class="col bloc">
                    <img class="section2-img2 offset-3" src="/images/icon_voiture.png">
                    <div style="text-align: center; margin-top: 65px; margin-right: 18px;">
                        <p class="offset-2" style="font-size: 26px;">
                            Vous êtes prêt à prendre <br>
                            vos nouvelles fonctions. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section4 pt-5">
            <div class="row">
                <img style="width: 7%; margin-left: 70px" src="/images/logo.png" alt="Logo de mon site">
            </div>
            <div class="row" style="margin-top: 100px">
                <div class="col text-center">
                    <h1 style="font-size: 30px;">Téléchargez l’application Faster</h1>
                    <div style="margin-top: 100px">
                        <img src="/images/googleplay.png" width="55%">
                    </div>
                    <div class="mt-4">
                        <img src="/images/appstore.png" width="55%">
                    </div>
                </div>
                <div class="col text-center">
                    <h1 style="font-size: 50px;">Navigation</h1>
                    <div style="margin-top: 100px">
                        <a href="{{url('/')}}" style="font-size: 25px;">Accueil</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="{{url('/passager')}}" style="font-size: 25px;">Passagers</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="{{url('/chauffeur')}}"" style="font-size: 25px;">Chauffeurs</a>
                    </div>
                </div>
                <div class="col text-center">
                    <h1 style="font-size: 50px;">Faster</h1>
                    <div style="margin-top: 100px">
                        <a href="" style="font-size: 25px;">Mon Compte</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">Mes courses</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">CGV</a>
                    </div>
                </div>
                <div class="col text-center">
                    <h1 style="font-size: 50px;">Contact</h1>
                    <div style="margin-top: 100px">
                        <a href="" style="font-size: 25px;">Contact@faster.com</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">Facebook</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">Instagram</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
