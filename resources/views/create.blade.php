    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body style="background-color:coral;">

        <div style="border:2px white solid;width:50%;margin-left:25%;text-align:center;font-size:40px;background-color:darkgoldenrod;">

            <header style="color:rgb(197, 66, 18)">
                        <p class="card-header-title">Création d'un film</p>
            </header>

            <div style="font-size:30px;color:rgb(102, 102, 102)">

                <div class="content">

                    <form action="{{ route('films.store') }}" method="POST">

                    @csrf

                        <div class="field">
                            <label class="label">Titre</label>
                        <div class="control">
                            
                            <input class="input @error('title') is-danger
                                @enderror" type="text" name="title" value="{{ old('title') }}"
                                placeholder="Titre du film" style="width:60%; height:30px;border:2px solid white;outline:none;background-color:coral;color:white">
                        </div>

                                @error('title')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror

                        </div>

                        <div class="field">  

                            <label class="label">Année de diffusion</label>
                        <div class="control">

                            <input class="input" type="number" name="year"
                            value="{{ old('year') }}" min="1950" max="{{ date('Y') }}"
                            style="width:60%; height:30px;border:2px solid white;outline:none;background-color:coral;color:white">
                        </div>

                        @error('year')

                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div>
                    <label class="label">Categori</label>

                 <div>
                    <select name="category_id"  style="width:61%; height:38px;border:2px solid white;outline:none;background-color:coral;color:white">

                    @foreach($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name
                    }}</option>

                    @endforeach

                    </select>
                 </div> 

                </div>
                        <div class="field">

                         <label class="label">Description</label>

                        <div class="control">

                        <textarea class="textarea" name="description"
                        placeholder="Description du film"
                        style="width:60%; height:200px;border:2px solid white;outline:none;background-color:coral;color:white">{{ old('description') }}</textarea>
                        </div>

            @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                        </div>

            <div class="field">

                            <div class="control">

                        <button style="width:20%;padding:20px;margin:15px 0px 15px 0px;color:coral;background-color:white;border-radius:50px;border:2px solid coral">Envoyer</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </body>
    </html>
