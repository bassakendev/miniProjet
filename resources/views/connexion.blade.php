@extends('partials.auth-layout')

@section('formulaire')

<div style="width: 50%; margin: 0px;padding: 15px 30px 10px 30px; background-color: black;">
    <p style="text-align: end;" id="colori"><u><a href="senregistrer">Devenir Beatmaker</a></u></p>
    <p style="font-weight: bold;font-size: 35px;text-align: center;margin-top: 18%;">CONNEXION</p>

@if (session()->has('info'))
<p style="color: red">{{session()->get('info')}}</p>
@endif

    <form action="#" method="post">
@csrf
       <div>
       <input type="email" name="email" id="email" placeholder="Entrez votre email" style="width: 95%;" value="{{old('email')}}" class=" recherche @error('email')
     isinvalid @enderror ">
        <p id="alerteMail">mauvaise saisie de l'adresse email mal saisi </p>

<div>
@error('email')
<div style="color:red">{{$message}}
</div>
@enderror

</div>
</div>
       
       <div>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" style="margin-bottom: 0px;width: 95%;margin-top: 15px;" value="{{old('password')}}"  class="recherche 
       @error('password') isinvalid @enderror">
       <p id="alertePass">le mot de passe doit contrnir 8 carractères des chiffres des lettres et aucun caractères specials</p>


<div>
@error('password')
<div style="color:red">{{$message}}

</div>
@enderror

</div>
</div>
        <div style="display: flex;justify-content: space-between;padding: 0px;margin: 0px;">
            <p style="opacity: 0.8;"><span style="padding:3px 10px 3px 10px;border-radius: 5px;border: 1px solid white;margin-right: 10px;"></span>Se souvenir de moi</p>
            <p style="opacity: 0.8;">Mot de passe oublié</p>
        </div>
        <button type="submit" id="btn" style="width: 100%;transition: ease 700ms;">Se connecter</button>
    </form>
    <p style="opacity: 0.8;">Nouveau sur mon Beatmaker? <a href="senregistrer" style="color: #D8B138;">S'inscrire</a></p>
    <div id=echeck style="color: red;transition: ease 1s;display: none;">
        <p>Nom ou Mot de passe non reconnu,veillez verifier votre saisie</p>
        <p>Si le probléme persiste ,c'est que vous n'etes pas membre sur <span style="color: #D8B138;">MBmaker</span> ,cherchez à vous inscrire</p>
    </div>

</div>

@endsection
      

