@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1 class="text-center p-5">Comics</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">THUMB</th>
                <th scope="col">PRICE</th>
                <th scope="col">SERIES</th>
                <th scope="col">SALE_DATE</th>
                <th scope="col">TYPE</th>
                <th><a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo fumetto</a></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($comics as $comic)
             <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>
                  <a href={{ route('comics.show', $comic) }}>{{ $comic->title }}</a></td>
                <td>{{ $comic->description }}</td>
                <td ><img class="img-fluid" src={{ $comic->thumb }} alt=""></td>
                <td>$ {{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </div>
</section>

@endsection

@section('title')
Laravel-dc-comics
  
@endsection

