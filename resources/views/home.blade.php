@extends('layouts.app')

@section('main_content')
    <h1>COMICS HOMEPAGE</h1>
    <div>
        Check <a href="{{ route('comics.index') }}"> Comics list</a> 
    </div>
    <br>
    <div>or</div>
    <br>
    <div>
        <a href="{{route('comics.create')}}">create </a>your hown comic!
    </div>
    <br>
    <div>ENJOY!!</div>
@endsection