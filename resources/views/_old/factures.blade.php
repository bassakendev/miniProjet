@extends('same')

@section('titre')
    factures
@endsection
    @section('cc')
    <p>
        cc j'suis une vue moi,plus precisement la vue des factures.
    </p>
    @endsection
   
@section('body')
<p>
    Et tu viens de me demander de t'afficheer la facture n° {{$numero}}
</p>
@endsection


