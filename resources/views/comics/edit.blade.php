@extends('layouts.app')

@section('main_content')

<h1>modifica questo prodotto</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- devo dargli l'id della riga che voglio aggiornare! --}}
<form action="{{ route('comics.update', ['comic'=> $comic->id]) }}" method="post">
    @csrf
    @method('PUT')
        
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" 
        value="{{old ('title') ? old ('title') : $comic->title}}">
    </div>
    <br>
    <div>
        <label for="thumb">Image Url</label> 
        <input type="text" id="thumb" name="thumb" 
        value="{{ old ('thumb') ? old ('thumb') : $comic->thumb}}">
    </div>
    <br>
    <div>
        <label for="type">Type</label>
        <input type="text" id="type" name="type" 
        value="{{ old ('type') ? old ('type') : $comic->type}}">
    </div>
    <br>
    <div>
        <label for="series">Series</label>
        <input type="text" id="series" name="series" 
        value="{{ old ('series') ? old ('series') : $comic->series}}">
    </div>
    <br>
    <div>
        <label for="sale_date">Sale date</label>
        <input type="date" id="sale_date" name="sale_date" 
        value="{{ old ('sale_date') ? old ('sale_date') : $comic->sale_date}}">
    </div>
    <br>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">
            {{ old ('description') ? old ('description') : $comic->description}}</textarea>
    </div>
    <br>
    <div>
        <label for="price">Price €</label>
        <input type="text" id="price" name="price" 
        value="{{ old ('price') ? old ('price') : $comic->price}}"> 
    </div>
    <br>
    <button>submit</button>
</form>
@endsection