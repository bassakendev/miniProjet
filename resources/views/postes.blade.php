<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mbmaker_postes</title>
    <link rel="stylesheet" href="{{asset('css/mbmaker.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <script src="{{asset('js/all.js')}}" defer></script>
    <script src="{{asset('js/postes.js')}}" defer></script>
    <script src="{{asset('js/testDeconnexion.js')}}" defer></script>
</head>

<body>
    <header style="background-image: none;background-color:rgba(40, 40, 40);padding-bottom: 0px;">
        <div style="display: flex;">
            <h3 style="flex: 1;font-size: 25px;margin-top: 10px; ">Mon<span style="color: #D8B138; ">Beatmaker</span></h3>
            <ul class="ul1 menuCont">
                <li>
                    <a href="acceuil">Accueil</a></li>
                <li>
                    Postes</li>
                <li>
                    <a href="apropos">A propos</a></li>
                <li>
                    <a href="profil">profil</a></li>
                <li>
                    <a href="contacts">Contact</a></li>

                <li><i class="fa fa-arrow-circle-o-up" aria-hidden="true" style="background-color: dodgerblue;border-radius: 50%;color: white;"></i></li>
                <li style="color: #D8B138;"><i class="fa fa-cart-plus" aria-hidden="true"></i></li>
            </ul>
            <p style="height: 10px;width: 10px; background-color: #D8B138;border-radius: 50%;color: black;margin-top: 5px;font-size: 8px;text-align: center;">12</p>
            <div style="width: 30px;height: 30px; border-radius: 50%;">
                <a href="mbmaker_profil.html"><img src="../pictures/11.jpg" alt="image" style="width: 30px;height: 30px;border-radius: 50%;margin: 8px;"></a>
            </div>
        </div>
        </div>
    </header>
    <section style="padding: 4% 7% 2% 7%;">
        <div style="display: flex;justify-content: space-between;">
            <div style="width: 70%;" class="reche_r">
                <input type="text" name="texte" id="recherche" class="recherche" style="width: 560px;" placeholder="Esseyer Rap Game beat ou Mbolé beat ">
                <button>Recherche</button>
            </div>
            <div style=" margin-bottom: 0px;width: 24%;" class="reche_r">
                <select name="date" id="date" style="width: 100%;background-color: rgba(40, 40, 40);color: #D8B138;font-size: 15px;outline: none;border: none;height: 50px;">
                    <option value="">Top du moi</option>
                    <option value="">Top de l'annee</option>
                    <option value="">Top de la semaine</option>
                </select>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;margin-top: 20px;width: 98.2%;height: 50px;" class="reche_r">
            <button style="width: 22%;">Top beat</button>
            <button style="width: 22%;background-color: rgb(59, 59, 59);">Top beatmaker</button>
            <button style="width: 22%;background-color: rgb(59, 59, 59);">Top playlist</button>
            <button style="width: 22%;background-color: rgb(59, 59, 59);">Top album</button>
        </div>

    </section>
    <section style="display: flex;justify-content: space-between; flex-wrap: wrap; margin: 4% 7% 2% 7%;padding:  1% 2% 3% 2%;border-radius: 5px; background-color: rgb(22, 22, 22);">
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">1</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div class="info">
                <p class="titre" style="margin-bottom: 0px;">Mbolé beatz (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">2</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Tenor beatz (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">3</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Mbolé rap gaing (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">4</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Mbolé dance (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">5</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Slow beatz (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">6</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Afro niger (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">7</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Afrobeats trap(Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">8</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Rap gangstere (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">9</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Zoock balahm(Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
        <div class="postes" style="display: flex;justify-content: space-between;border-radius: 5px; background-color: rgb(34, 34, 34);width: 45%;margin-bottom: 15px;">
            <p style="font-size: 20px;font-weight: bold;padding-left: 10px;padding-top: 15px;">10</p>
            <img src="../pictures/14.jpg" alt="" style="width: 70px;height:70px; margin: 7px 0px 7px -25px;border-radius:5px ;">
            <div>
                <p class="titre" style="margin-bottom: 0px;">Niama beatz (Year my negger)</p>
                <p style="margin-top: 5px;opacity: 0.6;font-size: 15px;">Alzah beatz</p>
            </div>
            <div class="roule"><i class="fa fa-ellipsis-h" aria-hidden="true" style="font-weight: bold;margin: 35px 15px auto 0px;"></i></div>
            <ul class="deroulant">
                <li>
                    <div class="icone"><i class="fa fa-user" aria-hidden="true"></i> </div>Suivre l’utilisateur
                </li>
                <li>
                    <div class="icone"><i class="fa fa-tasks" aria-hidden="true"></i> </div>Ajouter à la playlist
                </li>
                <li>
                    <div class="icone"><i class="fa fa-download" aria-hidden="true"></i> </div>Télécharger
                </li>
                <li>
                    <div class="icone"><i class="fa fa-commenting" aria-hidden="true"></i> </div>Commenter
                </li>
                <li>
                    <div class="icone"><i class="fa fa-share-alt" aria-hidden="true"></i> </div>Partager
                </li>
            </ul>
        </div>
        </div>
    </section>
    <section style="margin: 4% 7% 2% 7%;padding: 1% 2% 1% 2% ; background-color: #D8B138;color: black;display: flex;border-radius: 15px;">
        <div style="width: 40%;">
            <img src="../pictures/logo_mbmaker.jpg" alt="" style="border-radius:50%;">
            <p style="font-weight: bold;font-size: 25px;">Cherche, trouve et profite !
            </p>
            <p style="font-size: 15px;opacity: 0.7;">Rejoignez nous et profitez de cette promotion de 50%
                <br>de réduction à partir de 2 beats achetés</p>
            <button style="background-color: black;margin-top: 7%;">Allons-y !</button>
        </div>
        <div style="width: 50%;margin: 15px 0px 15px ;">
            <img src="../pictures/bf.jpg" alt="" style="width: auto;height: 300px;border-radius: 15px;">
        </div>
    </section>
</body>

</html>