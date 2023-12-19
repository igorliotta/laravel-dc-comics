<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

   public function show($id) {    

    $comic = Comic::find($id);

    return view('comics.show', compact('comic'));
   }

   public function create() {

    return view('comics.create');
   }

   public function store(Request $request) {

    $data = $request->all();

    //dd($data);
    $new_comic = new Comic();

    $new_comic->title = $data['title'];
    $new_comic->description = $data['description'];
    $new_comic->thumb = $data['thumb'];
    $new_comic->price = $data['price'];
    $new_comic->series = $data['series'];
    $new_comic->sale_date = $data['sale_date'];
    $new_comic->type = $data['type'];

    $new_comic->save();

    return redirect()->route('comics.show', $new_comic);
   }

   public function edit($id) {

    $comic = Comic::find($id);

    return view('comics.edit', compact('comic'));
   }

   public function update(Request $request, Comic $comic) {

    $data = $request->all();

    // $comic = Comic::find($id);
    $comic->update($data);

    // dd($data,$comic);
    return redirect()->route('comics.show', $comic);
   }
}
