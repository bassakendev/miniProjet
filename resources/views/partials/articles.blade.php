@extends('same')

@section('titre')
    articles
@endsection
    @section('cc')
    <p>
        cc j'suis une vue moi,plus precisement la vue des articles.
    </p>
    @endsection
   
@section('body')
<p>
    Et tu viens de me demander de t'afficheer l'article n° {{$numero}}
</p>
@endsection