@extends('layouts.app')

@section('main_content')
<div>
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <div>TYPE: {{$comic->type}}</div>
    <div>SERIES: {{$comic->series}}</div>
    <p>DESCRIPTION: {{$comic->description}}</p>
    <div>PRICE: {{$comic->price}}€</div>
    
</div>
@endsection