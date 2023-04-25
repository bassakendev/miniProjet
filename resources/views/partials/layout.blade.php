<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if (Request::is('apropos'))
    <title>A propos</title>
@else
    <title>Contact</title>
@endif

    <title>mbmaker_apropos</title>
    <link rel="stylesheet" href="{{asset('css/mbmaker.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <script src="{{asset('js/all.js')}}" defer></script>
    <script src="{{ asset('js/testDeconnexion.js') }}" defer></script>
</head>

<body>

    <header>
        <div style="display: flex;">
            <h3 style="flex: 1;font-size: 25px;margin-top: 10px; ">Mon<span style="color: #D8B138; ">Beatmaker</span></h3>
            <div style="display: flex;">
                <ul class="ul1 menuCont">
                    <li>
                        <a href="acceuil">Accueil</a></li>

                    <li class="{{ Request::is('apropos') ? 'active' : '' }}">
                        <a href="{{ Request::is('apropos')? '#' : 'apropos' }}">A propos</a></li>

                    <li class="{{ Request::is('contacts')? 'active' : '' }}">
                       <a href="{{ Request::is('contacts')? '#' : 'contacts' }}">Contact</a></li>
                    <li><i class="fa fa-arrow-circle-o-up" aria-hidden="true" style="background-color: dodgerblue;border-radius: 50%;color: white;"></i></li>
                    <li style="color: #D8B138;"><i class="fa fa-cart-plus" aria-hidden="true"></i></li>
                </ul>
                <p style="height: 10px;width: 10px; background-color: #D8B138;border-radius: 50%;color: black;margin-top: 5px;font-size: 8px;text-align: center;">12</p>
                <div style="width: 30px;height: 30px; border-radius: 50%;">
                    <img rc="../pictures/11.jpg" alt="image" style="width: 30px;height: 30px;border-radius: 50%;margin: 8px;">
                </div>
            </div>
        </div>
        <p style="font-weight: bold; font-size: 30px;margin-top: 10%; text-align: center;padding-bottom: 10%;">CONTACTEZ NOUS !</p>
    </header>

@yield('body')

<footer style="padding: 7% 7% 0% 7%;margin-top: 40%; background-color: black;">

    <div style="display: flex;justify-content: space-evenly;padding-bottom:3% ; ">
        <div style="text-align: justify; ">
            <p style="font-size: 25px;font-weight: bold; ">MonBeatmaker</p>
            <ul style="opacity: 0.5; ">
                <li>Acheter un Beat</li>
                <li>Vendre un Beat</li>
                <li>Tracks</li>
            </ul>
        </div>
        <div style="text-align: justify; ">
            <p style="font-size: 25px; font-weight: bold; ">A Propos</p>
            <ul style="opacity: 0.5; text-align: justify; ">
                <li>C’est quoi MonBeatmaker</li>
                <li>Notre équipe</li>
                <li>CharityBeat</li>
                <li>Affiliation</li>
            </ul>
        </div>
        <div style="text-align: justify; ">
            <p style="font-size: 25px;font-weight: bold;text-align: justify; ">Réseaux Sociaux</p>
            <ul style="opacity: 0.5; ">
                <li>Youtube</li>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Twitter</li>
            </ul>
            </div>

        </div>
        <div style="background-color: white; height: 1px;margin: 0% 0px 2% 0px; opacity: 0.5; "></div>

        <div style="display: flex;justify-content: space-between;margin-bottom: 0px;opacity: 0.5; ">
            <p>© 2021 Parazit Music, Inc. All right reserved</p>
            <p>Term & Conditons Privacy Policy Cookies Policy</p>
        </div>


    </footer>

</body>

</html>
