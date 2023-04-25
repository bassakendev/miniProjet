<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:coral; ">
    
<div style="width:80%;margin:4%;padding:40px;box-shadow:1px 1px 10px 30px darkgoldenrod;border:2px white solid;border-radius:30px">

    <div style="display:flex;align-items:center;justify-content:space-between;">

        <div style="color:white;text-align:center; width:20%;margin:auto;background-color:darkgoldenrod;padding:20px;box-shadow:1px 1px 10px 10px rgb(238, 238, 238)">
            <h1>Titre</h1>     
            <p>{{ $film->title }}</p>
        </div>

        <div style="color:white;text-align:center; width:20%;margin:auto;background-color:darkgoldenrod;padding:20px;box-shadow:1px 1px 10px 10px rgb(238, 238, 238)">
            <h1>Année de sortie</h1>
                <p>{{ $film->year }}</p>
                    
        </div>

    </div>

    <div style="display:flex;align-items:center;justify-content:space-between;">
        
        <div style="color:white;text-align:center; width:20%;margin:auto;background-color:darkgoldenrod;padding:20px;box-shadow:1px 1px 10px 10px rgb(238, 238, 238)">
            <h1>categori</h1>
                <p>{{ $categories}}</p>
                    
        </div>
        <div style="color:white;text-align:center; width:20%;margin:auto;background-color:darkgoldenrod;padding:20px;box-shadow:1px 1px 10px 10px rgb(238, 238, 238)">
            <h1>Description</h1>
                <p>{{ $film->description }}</p>

        </div>

    </div>
</div>
</body>
</html>