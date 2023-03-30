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
                            <a class="nav-link nav1" href="#">Passagers</a>
                            <a class="nav-link nav2" href="#">Comment ça marche</a>
                            <a class="nav-link nav2" href="#">Nos prix & engagements</a>
                        </li>
                        <span class="vr"></span>
                        <li class="nav-item">
                            <a class="nav-link nav1" href="#">Chauffeurs</a>
                            <a class="nav-link nav2" href="#">Comment ça marche</a>
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
                <h1 class="h1-text1">Bienvenue chez Faster,</h1>
                <p class="p1">
                    Le vtc local qui vous accompagne en toute sécurité dans
                    <br> tous vos trajets.
                </p>
            </div>
        </section>

        <section class="section3">
            <div class="row">
                <h1 style="margin-left: 150px; font-size: 50px; margin: 70px; color: #F8B620;">A propos de Faster.</h1>
            </div>
            <div class="row" style="margin-top: 60px">
                <div class="col">
                    <h1 style="font-size: 50px; margin-left: 70px;">
                        Le meilleur choix de transport <br>
                        pour une agréable journée.
                    </h1>
                    <p style="font-size: 25px; margin-left: 70px; margin-top: 70px;">
                        Faster est le service VTC à la demande qui vous accompagnera<br>
                        en toute sécurité dans tous vos déplacements.<br>
                         
                    </p>
                    <p style="font-size: 25px; margin-left: 70px; margin-top: 30px;">
                        Via l’application FASTER vous pourrez commander votre<br>
                        chauffeur et vous déplacer vers la destination de votre<br>
                        choix en indiquant simplement la géolocalisation de votre<br>
                        destination finale.
                         
                    </p>
                </div>
                <div class="col">
                    <img class="offset-2" style="width: 75%"; src="/images/apropos.png">
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
                        <a href="" style="font-size: 25px;">Accueil</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">Passagers</a><br>
                    </div>
                    <div class="mt-4">
                        <a href="" style="font-size: 25px;">Chauffeurs</a>
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
