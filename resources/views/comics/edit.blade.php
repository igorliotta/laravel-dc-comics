@extends('layouts.app')

@section('content')

<section class="py-5">

{{-- @dump($comic) --}}

    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ $comic->title }}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrivi il fumetto">{{ $comic->description }}</textarea>
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <textarea class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'URL dell'immagine">{{ $comic->thumb }}</textarea>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{ $comic->price }}">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"  placeholder="Data" value="{{ $comic->sale_date }}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia" value="{{ $comic->type }}">
              </div>

              <div class="">
                <input type="submit" value="Crea">
              </div>
        </form>
    </div>
</section>
    
@endsection