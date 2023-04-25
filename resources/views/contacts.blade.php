
@extends('partials.layout')

@section('body')
    
<div style="margin-top: 5%;margin-bottom: 5%;">
    <p style="font-size: 30px;font-weight: bold;margin-bottom: 5px;text-align: center;">LAISSEZ NOUS <span style="color: #D8B138;">UN MESSAGE</span></p>
    <p style="text-align: center;margin-top: 0px;">Nous serons ravi de vous lire.</p>
</div>
<section style=" padding: 1% 5% 2% 5%;margin: 0px">
    <div style="display: flex;width: 100%;;justify-content: space-between;">

        <div style="width: 25%;height: 100px;border-radius: 5px; padding: 10px 30px 10px 30px;background-color:  rgb(22, 22, 22);">
            <i class="fa fa-map-marker" aria-hidden="true" style="color: #D8B138;font-size: 30px;margin-left: 45%;"></i>
            <p style="text-align: center;">Cité des palmiers,Douala
                <br> Cameroun</p>
        </div>
        <div style="width: 25%;height: 100px;border-radius: 5px; padding: 10px 30px 10px 30px;background-color:  #D8B138;">
            <i class="fa fa-phone" aria-hidden="true" style="color: white;font-size: 30px;margin-left: 45%;"></i>
            <p style="text-align: center;">+237 692 481 201</p>
            <p style="text-align: center;"> +237 232 372 026</p>
        </div>
        <div style=" width: 25%;height: 100px;border-radius: 5px; padding: 10px 30px 10px 30px;background-color:  rgb(22, 22, 22);">
            <i class="fa fa-envelope" aria-hidden="true" style="color: #D8B138;font-size: 30px;margin-left: 45%;"></i>
            <p style="text-align: center;">Support@monbeatmaker.com</p>
        </div>

    </div>
</section>

<section style=" padding: 0.5% 5% 2% 5%;margin: 0px">
    <div style="padding: 15px 25px 5px 25px; background-color:  rgb(22, 22, 22);">
        <div style="display: flex;justify-content: space-between; width: 100%;">
            <div style="display: flex;flex-direction: column;width: 47%;">
                <input type="text" name="name" id="" placeholder="Entrez votre nom" style="width: 100%;margin-bottom: 30px;" class="recherche">
                <input type="email" name="email" id="" placeholder="Entrez votre email" style="width: 100%;margin-bottom: 30px;" class="recherche">
                <input type="text" name="number" id="" placeholder="Entrez votre telephone" style=" margin-bottom: 0px; width: 100%;" class="recherche">
            </div>
            <div style="width: 47%;">
                <textarea name="" id="" placeholder="Entrez votre message" style="outline: none;width: 100%;height: 100%;background-color:  rgba(40, 40, 40);color: #D8B138; font-family: Arial, Helvetica, sans-serif;"></textarea>
            </div>
        </div>
        <button type="submit" style="margin: 30px 0px 15px 45%;">Envoyer</button>
    </div>

</section>

<section style=" padding: 1% 5% 2% 5%;margin: 0px">

    <p style="font-size: 30px;font-weight: bold;text-align: center;">NOS <span style="color: #D8B138;">PARTENAIRES</span></p>
    <p style="text-align: center;">Quelques examples d’entreprises qui nous ont fait confiance et qui ont
        <br> décidées de travailler avec nous.</p>

    <div style="display: flex;justify-content: space-between;width: 100%; height: 110px;">
        <div style=" width: 18%;border-radius: 5px; padding: 10px 30px 10px 30px;background-image: url(../pictures/mtn.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;"></div>
        <div style=" width: 18%;border-radius: 5px; padding: 10px 30px 10px 30px;background-image: url(../pictures/orange.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;"></div>
        <div style=" width: 18%;border-radius: 5px; padding: 10px 30px 10px 30px;background-color: rgb(250, 244, 244);;"></div>
        <div style=" width: 18%;border-radius: 5px; padding: 10px 30px 10px 30px;background-color:  rgb(250, 244, 244);"></div>
    </div>
</section>

@endsection