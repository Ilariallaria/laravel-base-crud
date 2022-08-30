@extends('layouts.app')

@section('main_content')
    <h1>ALL COMICS</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{$comic->title}}</h2>
            <div>TYPE: {{$comic->type}}</div>
            <div>SERIES: {{$comic->series}}</div>
            <p>DESCRIPTION: {{$comic->description}}</p>
            <div>PRICE: {{$comic->price}}€</div>
            <br>
        </div>
        
    @endforeach
@endsection