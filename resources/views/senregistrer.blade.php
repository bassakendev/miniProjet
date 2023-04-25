@extends('partials.auth-layout')


@section('formulaire')
    
    <div style="width: 50%; margin: 0px;padding: 15px 30px 10px 30px; background-color: black;">
        <p style="font-weight: bold;font-size: 35px;text-align: center;margin-top: 18%;">INSCRIPTION</p>

    <form action="{{route('senregistrer.store')}}" method="post">
      @csrf   
            <div>
            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" style="width: 92%;"
            class=" recherche @error('nom') isinvalid @enderror" value="{{old('nom')}}">
            <p id="alerteNam">le nom et le prenom doivent au moins contenir 3 lettres </p>
            <div>
                @error('nom')
                <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            </div>

            <div> 
            <input type="tex" name="prenom" id="prenom" placeholder="Entrez votre prenom" style="margin-bottom: 0px;width: 92%;margin-top: 15px;" class="recherche
            @error('prenom') isinvalid @enderror" value="{{old('prenom')}}">
            <div>
                @error('prenom')
                <div style="color:red">{{$message}}</div>
                @enderror
                </div>  
            </div>

            <div>
            <input type="email" name="email" id="email" placeholder="Entrez votre email" style="margin-bottom: 0px;width: 92%;margin-top: 15px;" class="recherche
            @error('email') isinvalid @enderror" value="{{old('email')}}">
            <p id="alerteMail">mauvaise saisie de l'adresse email mal saisi</p>
            <div>
                @error('email')
                <div style="color:red">{{$message}}</div>
                @enderror
                </div>
            </div>

            <div style="display: flex;justify-content: space-between;width: 100%;">
                <div id="bxvilles" style=" margin-bottom: 0px;width: 45%;margin-top: 15px;" class="recherche">
                    <select name="ville" id="villes" style="width: 100%;background-color: rgba(40, 40, 40);color: #D8B138;font-size: 15px;outline: none;border: none;"
                    class="@error('ville') isinvalid @enderror">
                        <option value="Choisir une ville">Choisir une ville</option>
                        <option value="Douala">Douala</option>
                        <option value="Dackar">Dackar</option>
                        <option value="Abbidjan">Abbidjan</option>
                    </select>
                    <div>
                        @error('ville')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                </div>
                <div id="bxpays" style=" margin-bottom: 0px;width: 45%;margin-top: 15px;" class="recherche">
                    <select name="pays" id="pays" style="width: 100%; background-color: rgba(40, 40, 40);color: #D8B138;font-size: 15px;outline: none;border: none;"
                    class="@error('pays') isinvalid @enderror">
                        <option name="Choisir un pays" value="Choisir un pays">Choisir un pays</option>
                        <option name="Cameroun" value="Cameroun">Cameroun</option>
                        <option name="Senegal" value="Senegal">Senegal</option>
                        <option name="Cote d'ivoir" value="Cote d'ivoir">Cote d'ivoir</option>
                    </select>
                    <div>
                        @error('pays')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                        </div>
                </div>
            </div>

            <div>
            <input type="tel" name="tel" id="tel" placeholder="Entrez votre telephone" style="margin-bottom: 0px;width: 92%;margin-top: 15px;" class="recherche"
            class="@error('tel') isinvalid @enderror" value="{{old('tel')}}">
            <p id="alerteTel">une erreur a été détectée sur le contact il ne doit contenir que des chiffres</p>
            <div>
                @error('tel')
                <div style="color:red">{{$message}}</div>
                @enderror
                </div>
            </div>

            <div>
            <input type="password" name="password1" id="password1" placeholder="Mot de passe " style="margin-bottom: 0px;width: 92%;margin-top: 15px;" value="{{old('password1')}}"
            class="recherche @error('password1') isinvalid @enderror">
            <p id="alertePass">le mot de passe doit contrnir 8 carractères des chiffres des lettres et aucun caractère special</p>
            <div>
                @error('password1')
                <div style="color:red">{{$message}}</div>
                @enderror
                </div>
            </div>

            <div>
            <input type="password" name="password2" id="password2" placeholder="Confirmez le Mot de passe " style="margin-bottom: 15px;width: 92%;margin-top: 15px;" value="{{old('password2')}}" class="recherche 
            @error('password2') isinvalid @enderror">
            <div>
                @error('password2')
                <div style="color:red">{{$message}}</div>
                @enderror
                </div>
            </div>

            <button type="submit" id="btn" style="width: 97%;transition: ease 600ms;"> Se connecter</button>
        </form>

        <p style="opacity: 0.8;">Nouveau sur mon Beatmaker? <a href="connexion" style="color: #D8B138;">Se connecter</a></p>
    </div>
    <div style="width: 6px;border-radius: 5px;margin: 150px 15px 125px 0px;background-color:rgba(40, 40, 40) ;">
        <div id="progression" style="background-color: #D8B138;height: 0%;width: 100%;border-radius: 5px;"></div>
    </div>
</div>

@endsection




