@extends('layouts.app')

@section('main_content')
    <h1>ALL COMICS</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div>TYPE: {{$comic->type}}</div>
            <div>PRICE: {{$comic->price}}€</div>

            {{-- la rotta sarà data dal nome nella list, che però dobbiamo popolare
                (nella list, le graffe indicano che va popolato) con l'id,
            perchè, ovviamente, vogliamo l'elemento su cui l'utente ha cliccato.
            Possiamo farlo con le parentesi quadre:
            il 'comic' indicato tra le graffe deve essere uguale all'id del comic selezionato--}}

            <div><a href="{{ route('comics.show', ['comic'=> $comic->id]) }}">Learn more</a></div>
            <br>
        </div>
        
    @endforeach
@endsection