
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mbmaker.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    @if (Request::is('connexion'))
        <script src="{{ asset('js/connexion.js') }}" defer></script>
        <title>Connexion</title>
    @else
        <script src="{{ asset('js/senregistrer.js')}}" defer></script>
        <title>Enregistrement</title>
    @endif
</head>


<body style="width: 100%; height:100%;">


    <div style="height:100%; display: flex; margin-bottom: 0px;padding-bottom: 0px;">
        <div style="width: 50%;height:100%; margin: 0px;padding: 15px 30px 10px 30px;background-image: url(15.jpg);background-repeat: no-repeat;background-position: center center;background-size: cover;">
            <h3 style="flex: 1;font-size: 25px;margin-top: 10px; ">Mon<span style="color: #D8B138; ">Beatmaker</span></h3>
            <div style="padding-left: 20px;margin-top: 30%;;padding-right: 225px;">
                <p style="font-weight: bold;font-size: 52px;text-align: center;margin-bottom: 0px;padding-bottom: 0px;"> +10.000
                    <br>BEATMAKER
                </p>
                <p style="font-weight: bold;margin-top: 0px;padding-top: 0px;">Trouve les meilleurs beats pour tes projets.</p>
            </div>

            <div style="display: flex; text-align: center;margin-top: 41%;padding-left: 95%;;">
                <i class="fa fa-facebook" aria-hidden="true" style="border-radius: 50%;color: black;background-color: white;margin-right: 5px; "></i>
                <i class="fa fa-instagram" aria-hidden="true" style="border-radius: 50%;color: black;background-color: white;margin-right: 5px; "></i>
                <i class="fa fa-youtube" aria-hidden="true" style="border-radius: 50%;color: black;background-color: white;margin-right: 5px; "></i>
            </div>
        </div>

@yield('formulaire')
      

</body>

</html>