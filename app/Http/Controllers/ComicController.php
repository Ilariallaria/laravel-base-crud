<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // voglio tutti i fumetti
        $comics = Comic::all();

        // li metto in data e li passo alla view
        $data = [
            'comics' => $comics
        ];

        return view('comics.index', $data);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // regole di validazione dati
        $request->validate([
            'title' => 'required|max:50',
            'thumb' => 'required|max:60000',
            'series' => 'required|max:50',
            'type' => 'required|max:20',
            'sale_date' => 'required|max:10',
            'description' => 'required|max:60000',
            'price' => 'required|max:10',
        ]);

        $new_data = $request->all();
         
        $new_comic = new Comic();
        // $new_comic->title = $new_data ['title'];
        // $new_comic->thumb = $new_data ['thumb'];
        // $new_comic->series = $new_data ['series'];
        // $new_comic->type = $new_data ['type'];
        // $new_comic->sale_date = $new_data ['sale_date'];
        // $new_comic->description = $new_data ['description'];
        // $new_comic->price = $new_data ['price'];
        $new_comic->fill($new_data);
        $new_comic->save();

        // scegliamo noi dove reinderizzare l'utente
        // scelto show del prodotto appena creato,
        // dobbiamo compilare il solito campo che appare in list, con in nuovo id che abbiamo a disposizione
        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);
        $data = [
            'comic' => $comic
        ];

        return view ('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic'=> $comic
        ];

        return view ('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_data = $request->all();
       
        // mi prendo l'elemento con specifico id con il model
        $comic_to_update = Comic::findOrFail($id);

        // avendo dato mass assignment è sufficiente ->update
        // se non fai mass assignment devi ripopolare tue le colonne e fare save
        $comic_to_update->update($new_data);

        return redirect()->route('comics.show', ['comic' => $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
