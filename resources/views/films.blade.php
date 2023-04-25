@php

$number = 1;
 
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>

<body style="background-color:coral;">
    <h1 style="text-align: center;color:white">Tous vos Films se trouves ici</h1>
    <div style="display: flex; flex-direction: column;width:70%;margin:auto;background-color:darkgoldenrod;padding:50px;box-shadow:1px 1px 1px 1px rgb(238, 238, 238);position:relative">

        <div style="display:flex; margin-bottom:5%;">
            <div style="font-weight: bold; font-size: 20px;margin-right:10%;width:5px;color:white">N°</div>
            <div style="font-weight: bold; font-size: 20px;color:white">Titre</div>
            <a href="{{route('films.create')}}" style="background-color:coral;padding:10px;color:white;margin-left:71%;border-radius:20px;border:1px white solid"><div>Créer un Film</div></a>
            @if(session()->has('info'))
            <div style="font-size:20px;color:white;background-color: green;border:1px yellow solid;border-radius:5px;padding:20px;position:absolute;left:25%;top:5%;">{{session('info')}}</div>
            @endif

            <div style="position:absolute;margin-left:58%;z-index:1">
                <select onchange="window.location.href = this.value" style='padding:10px;border:2px solid coral;border-radius:20px;color:coral;outline:none'> 
                    <option value="{{route('films.index')}}" @unless($slug) selected @endunless>Toutes les categories</option>

                    @foreach($categories as $category)

                    <option value="{{route('films.category', $category->slug)}}"
                       {{$slug == $category->slug ? 'selected' : ''}} >{{$category->name}}
                    </option>

                    @endforeach
                </select>
            </div>

        </div>
        

@foreach($films as $film)

        <div style=" display:flex; border-top: 1px coral solid; margin-bottom:2%;padding-top:2%">

            <div style="font-weight:bold;font-size: 20px; margin-right:10%; width:5px;margin-top:10px;color:white">{{$number}}</div>
            
            <div style="width: 300px;margin-right:5%;margin-top:10px">{{$film->title}}</div>

            @if($film->deleted_at)
            
            <form action="{{route('films.restore', $film->id)}}" method='post' style="text-decoration: none;color:black;margin-right:10%;">
                @csrf
                @method('PUT')
               
                <button type='submit' style="padding:10px;background:cornflowerblue;border-radius:10px;border:2px white solid">Restorer</button>
            </form>
 
            <form action="{{route('films.force.destroy',$film->id)}}" method="post" style="margin-left:140px;">
                 @csrf
                 @method('DELETE')

                <button style="padding:10px;background:red;border-radius:10px;border:2x white solid;border:2px black solid" type="submit">Supprimer</button>
            
            </form>

            @else

             <a href="{{route('films.show',$film->id)}}" style="text-decoration: none;color:black;margin-right:10%;">
                <div style="padding:10px;background:cornflowerblue;border-radius:10px;border:2px white solid">voir</div>
            </a>

            <a href="{{route('films.edit',$film->id)}}" style="text-decoration: none;color:black;margin-right:10%;">
                <div style="padding:10px;background:peru;border-radius:10px;border:2px white solid">Modifier</div>
            
            </a>

            <form action="{{route('films.destroy',$film->id)}}" method="post">
                @csrf
                @method('DELETE')

               <button style="padding:10px;background:red;border-radius:10px;border:2x white solid;border:2px black solid" type="submit">Supprimer</button>
           
           </form>
        @endforelse    
           
        </div>

        @php
        $number++;
    @endphp

@endforeach
        

      <footer style="background-color:rgb(168, 121, 0);margin-top:15px;">
         {{ $films->links() }}
      </footer>


    </div>
</body>

</html>