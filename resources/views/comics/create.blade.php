@extends('layouts.app')

@section('main_content')
    <h1>CREATE NEW COMIC</h1>

    <form action="{{route ('comics.store')}}" method="post"> @csrf
        
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <br>
        <div>
            <label for="thumb">Image Url</label> 
            <input type="text" id="thumb" name="thumb">
        </div>
        <br>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type">
        </div>
        <br>
        <div>
            <label for="series">Series</label>
            <input type="text" id="series" name="series">
        </div>
        <br>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="price">Price €</label>
            <input type="text" id="price" name="price">
        </div>
        <br>
        <button>Submit</button>
    </form>
@endsection