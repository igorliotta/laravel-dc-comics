@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrivi il fumetto"></textarea>
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <textarea class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'URL dell'immagine"></textarea>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"  placeholder="Data">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia">
              </div>

              <div class="">
                <input type="submit" value="Crea">
              </div>
        </form>
    </div>
</section>
    
@endsection