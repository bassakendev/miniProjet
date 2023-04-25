 @extends('template') @section('body')
<br>
<div class="container">
    <div class="row card text-white bg-dark">
        <h4 class="card-header">Contactez-moi</h4>
        <div class="card-body">
            <form action="{{ url('users') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control @error('nom') isinvalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{
            old('nom') }}"> @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control @error('email')
            isinvalid @enderror" name="email" id="email" placeholder="Votre email" value="{{
            old('email') }}"> @error('email')
                    <div class="text-denger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea class="form-control @error('message') isinvalid @enderror" name="message" id="message" placeholder="Votre message">{{
            old('message') }}</textarea> @error('message')
                    <div class="text-denger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Envoyer !
            </button>
            </form>
        </div>
    </div>
</div>
@endsection