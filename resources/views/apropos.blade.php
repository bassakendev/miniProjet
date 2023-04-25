@extends('partials.layout')

@section('body')
   
    <div style="margin-bottom: 5%;">
        <p style="font-weight: bold;font-size:30px;text-align: center;margin: 0px;">DREAMS,
            <strong style="color: #D8B138;">WE MAKE IT!</strong>
        </p>
        <p style="margin-top: 10px;text-align: center;">Artiste, Producteur, Manager, ingénieur son, Beatmakers</p>
    </div>
    <section style="display: flex;justify-content: space-between; padding: 1% 7% 2% 7%;">
        <p style="width: 47%;text-align: justify;opacity: 0.8;font-size: 15px;">
            <strong style="font-weight: bold;">Parazit Production</strong> est une structure indépendante créée en 2015 ; elle s’est structurée au fil du temps autour de plusieurs projets notamment, le label Parazit Music et son studio d’enregistrement, la plateforme Monbeatmaker, la division
            Parazit Live, et Parazit Picture.<br>
            <br>Nous sommes une équipe de jeunes passionnés de musique, nous avons décidé de mettre en commun nos compétences pour travailler et donner une visibilité aux artistes d’Afrique en générale et aux Beatmakers d’Afrique en particulier.<br>
            <br>Les objectifs principaux sont de procurer aux artistes un environnement adapté à leurs besoins et de booster leurs carrières en leur offrant notre savoir-faire sur l’ensemble des paramètres de music business.<br>
            <br>Parazit Music développe des projets musicaux et révèle de nouveaux talents, non seulement en les finançant, mais également en mettant en place les outils appropriés : directions et conseils artistiques, édition et production de musique,
            label, promotion classique et digitale, studio d’enregistrement, gestion de droits digitaux pour le compte et aux bénéfices des auteurs et des artistes… La synchronisation et l’utilisation dérivée de musiques sont également au cœur de la stratégie
            globale. C’est ainsi que nous collaborons régulièrement avec le cinéma, la TV, la pub et le spectacle vivant.
        </p>
        <div style="width: 47%;padding-top: 8px;">
            <img src="../pictures/livre.jpg" alt="" width="73%">
        </div>

    </section>
    <div style="margin-bottom: 5%;margin-top: 35px;">
        <p style="font-weight: bold;font-size:30px;text-align: center;margin: 0px;">NOTRE,
            <strong style="color: #D8B138;">EQUIPE</strong>
        </p>
        <p style="margin-top: 20px;text-align: center;">Derrière chaque bon produit se cache une grande équipe</p>
    </div>

    <section style="display: flex;justify-content: space-between; padding: 1% 7% 2% 7%;">
        <div style="width: 31%;border: 5px solid #D8B138;border-radius: 5px; padding-top: 15px;padding-bottom: 25px;">
            <img src="../pictures/bmk1.jpg" alt="" style="width:250px;height:250px;border-radius: 50%;margin-bottom: 15px;margin-left: 50px;">
            <p style="font-size: 15px;font-weight: bold;text-align: center;">Jully NTENYA</p>
            <p style="font-size: 10px;opacity:0.8;text-align: center; margin-top: 5px;">Founder/CEO Parazit Production</p>
        </div>
        <div style="width: 31%;border: 5px solid rgba(40, 40, 40);border-radius: 5px; padding-top: 15px;padding-bottom: 25px;">
            <img src="../pictures/bmk2.jpg" alt="" style="width:250px;height:250px;border-radius: 50%;margin-bottom: 15px;margin-left: 50px;">
            <p style="font-size: 15px;font-weight: bold;text-align: center;">Patrick DATOUO</p>
            <p style="font-size: 10px;opacity:0.8;text-align: center; margin-top: 5px; ">Projet Manager </p>
        </div>
        <div style="width: 31%;border: 5px solid rgba(40, 40, 40);border-radius: 5px; padding-top: 15px;padding-bottom: 25px;">
            <img src="../pictures/bmk3.jpg" alt="" style="width:250px;height:250px;border-radius: 50%;margin-bottom: 15px;margin-left: 50px;">
            <p style="font-size: 15px;font-weight: bold;text-align: center;">Cedric DJOFANG</p>
            <p style="font-size: 10px;opacity:0.8;text-align: center; margin-top: 5px;">Ingénieur son</p>
        </div>
    </section>
    @endsection