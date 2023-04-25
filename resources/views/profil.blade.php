
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="{{asset('css/mbmaker.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <script src="{{asset('js/all.js')}}" defer></script>
    <script src="{{asset('js/profils.js')}}" defer></script>
    <script src="{{asset('js/testDeconnexion.js')}}" defer></script>
</head>

<body>
    <header style="background-image: none;background-color:rgba(40, 40, 40);padding-bottom: 0px;">
        <div style="display: flex;">
            <h3 style="flex: 1;font-size: 25px;margin-top: 10px; ">Mon<span style="color: #D8B138; ">Beatmaker</span></h3>
            <ul class="ul1 menuProfil">
                <li>
                    <a href="acceuil">Accueil</a></li>
                <li>
                    <a href="postes">Postes</a></li>
                <li>
                    <a href="apropos">A propos</a></li>
                <li>
                    <a href="contacts">Contact</a></li>
                <li>
                    Profil</li>
                <li class="deconnexion">
                    Se deconnecter</li>
                <li><i class="fa fa-arrow-circle-o-up" aria-hidden="true" style="background-color: dodgerblue;border-radius: 50%;color: white;"></i></li>
                <li style="color: #D8B138;"><i class="fa fa-cart-plus" aria-hidden="true"></i></li>
            </ul>
            <p style="height: 10px;width: 10px; background-color: #D8B138;border-radius: 50%;color: black;margin-top: 5px;font-size: 8px;text-align: center;">12</p>

        </div>
        </div>
    </header>
    <section style="display: flex;justify-content: space-between; padding: 5% 7% 2% 7%;">
        <div style="width: 30%;">
            <div style=" background-color:rgba(40, 40, 40) ;padding:2px 30px 15px 30px;margin-bottom: 20px;border-radius: 5px;">
                <img src="../pictures/12.jpg" alt="" style="width: 150px;height: 150px;padding: 15px 0px 5px 55px; ">
                <p style="text-align: center;margin-top: 5px;">Talbeatz recordz( hot beat n**ger)</p>
                <p style="opacity: 0.6;margin:5px 0px 10px 0px ;text-align: center;">Talbeatz </p>
                <div style="display: flex;justify-content: space-between;">
                    <div> <i class="fa fa-heart" aria-hidden="true" style="margin-bottom: 0px;"></i>
                        <p style="margin-top: 3px;font-size: 15px;opacity: 0.6;">22k</p>
                    </div>
                    <i class="fa fa-play-circle" aria-hidden="true" style="background-color: rgb(44,44,44);color: #D8B138;"></i>
                    <i class="fa fa-list" aria-hidden="true" style="color: white;"></i>
                    <i class="fa fa-share-alt" aria-hidden="true" style="color: white;"></i>
                </div>
                <button class="deconnexion" style="width: 100%;background-color:rgba(50, 50, 50) ;">Se deconnectée</button>
            </div>
            <div style="background-color:rgba(50, 50, 50) ;padding:10px 10px 75px 10px;border-radius: 5px;">
                <p style="font-weight: bold;">Informations</p>
            <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Nom:</span><span id="nom">{{session()->get('coordonnes')->nom }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Prenom:</span><span id="prenom">{{session()->get('coordonnes')->prenom }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Email:</span><span id="email">{{session()->get('coordonnes')->email }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Ville:</span><span id="ville">{{session()->get('coordonnes')->ville }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Pays:</span><span id="pays">{{session()->get('coordonnes')->pays }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Tel:</span><span id="tel">{{session()->get('coordonnes')->tel }}</span></p>
                <p style="display: flex;justify-content: space-between;opacity: 0.5;"><span>Mot de passe:</span><span id="passeword">{{session()->get('coordonnes')->password }}</span></p>
            </div>
        </div>
        <div style="width: 65%;">
            <div style="background-color:rgb(44,44,44) ;padding: 15px 15px 50px 15px;margin-bottom: 20px;border-radius: 5px;">

                <p style="opacity: 0.8;">Licence & Prix</p>
                <div style="display: flex;justify-content: space-between; background-color:rgba(50, 50, 50) ;padding: 20px;margin-bottom: 43px; border-radius: 5px;">
                    <div>
                        <p style="font-weight: bold;font-size: 15px;margin: 0px 0px 0px 0px ;">Licence Basic | MP3</p>
                        <p style="font-weight: bold;font-size: 13px;opacity: 0.7; margin: 10px 0px 0px 0px ;">
                            <u>Info licence</u>
                        </p>
                        <p style="font-weight: bold;font-size: 17px;color: #D8B138;padding-top: 4px;margin: 2px 0px 0px 0px ;">2.500 FCFA</p>
                    </div>
                    <div style="margin: 0px 0px 0px 0px ;">
                        <button class="selection"><i id="vue0" class="fa fa-eye" style="padding-top: 15px;"></i><span class="btn">Selectioner</span></button>
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between; background-color:rgba(50, 50, 50) ;padding: 20px;margin-bottom: 43px; border-radius: 5px;">
                    <div>
                        <p style="font-weight: bold;font-size: 15px;margin: 0px;">Licence Premium | MP3 + WAV</p>
                        <p style="font-weight: bold;font-size: 13px;opacity: 0.7; margin: 10px 0px 0px 0px ;">
                            <u>Info licence</u>
                        </p>
                        <p style="font-weight: bold;font-size: 17px;color: #D8B138;padding-top: 4px;margin: 2px 0px 0px 0px ;">15.000 FCFA</p>
                    </div>
                    <div style="margin: 0px 0px 0px 0px ;">
                        <button class="selection"><i id="vue1" class="fa fa-eye" style="padding-top: 15px;"></i> selectioner</button>
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between; background-color:rgba(50, 50, 50) ;padding: 20px;margin-bottom: 43px; border-radius: 5px;">
                    <div>
                        <p style="font-weight: bold;font-size: 15px;margin: 0px;"> Licence Gold | MP3 + WAV</p>
                        <p style="font-weight: bold;font-size: 13px;opacity: 0.7; margin: 10px 0px 0px 0px ;">
                            <u>Info licence</u>
                        </p>
                        <p style="font-weight: bold;font-size: 17px;color: #D8B138;padding-top: 4px;margin: 2px 0px 0px 0px ;">25.000 FCFA</p>
                    </div>
                    <div style="margin: 0px 0px 0px 0px ;">
                        <button class="selection"><i id="vue2" class="fa fa-eye" style="padding-top: 15px;"></i> selectioner</button>
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between; background-color:rgba(50, 50, 50) ;padding: 20px;border-radius: 5px;">
                    <div>
                        <p style="font-weight: bold;font-size: 15px;margin: 0px;">Licence Exclusive </p>
                        <p style="font-weight: bold;font-size: 13px;opacity: 0.7; margin: 10px 0px 0px 0px ;">
                            <u>Info licence</u>
                        </p>

                    </div>
                    <div style="margin: 0px 0px 0px 0px ;">
                        <button class="selection"><i id="vue3" class="fa fa-eye" style="padding-top: 15px;"></i> Selectioner</button>
                    </div>
                </div>
            </div>
            <div style="padding: 15px; width: 96%;margin-top: 60px;background-color:rgb(44,44,44) ;border-radius: 5px;">

                <p style="font-weight: bold;">Commentaires</p>
                <div style="margin-top: 25px;width: 97%;display: flex;">
                    <input type="text" name="commentaire" id="commentaire" placeholder="Ecrire un commentaire" class="recherche" style="width: 455px;">
                    <button id="envoyer" disabled="disabled" style="opacity: 0;transition: ease 1s;">Envoyer</button>
                </div>
                <div class="boiteDeCommentaires" style="display: none;">
                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/12.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Lourd est le son, lourd est la prod, obaise est le beat comme cabrel nanjip</p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color: #D8B138;"></i> 3
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/1.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Sa ma surtout rapellé le bon vieux temps </p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color: white"></i> 7
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="boiteDeCommentaires" style="display: none;">
                    <p id="messagerieVide" style="display: flex;text-align: center; margin: 20px; padding: 40px;">
                        Aucun commentaires sur ce poste ..!
                    </p>
                </div>
                <div class="boiteDeCommentaires" style="display: none;">
                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/10.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Lourd est le son, lourd est la prod, obaise est le beat comme cabrel nanjip</p>
                            <p><i class="fa fa-heart" aria-hidden="true"></i> 5
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/11.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Sa ma surtout rapellé le bon vieux temps </p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color:#D8B138"></i> 9
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>
                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/7.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color: #D8B138"></i> 17
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="boiteDeCommentaires" style="display: none;">
                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/9.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Lourd est le son, lourd est la prod, obaise est le beat comme cabrel nanjip</p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color: white"></i> 21
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; margin-top: 20px;">
                        <img src="../pictures/4.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">
                        <div>
                            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Darki .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>
                            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">Sa ma surtout rapellé le bon vieux temps </p>
                            <p><i class="fa fa-heart" aria-hidden="true" style="color: #D8B138"></i> 17
                                <span style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="boiteDeCommentaires">
                    <p style="display: flex;text-align: center; margin: 20px; padding: 40px;">
                        Vos commentaires s'afficherons ici
                    </p>
                </div>

                <button style="background-color:rgba(50, 50, 50) ; opacity: 0.7;">Voir tous(34)</button>
            </div>
        </div>
    </section>
</body>

</html>