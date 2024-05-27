@extends('layouts.app')
@section('title', 'Fumetti')

@section('content')
  <section class="container mt-4" id="comics">
    <div>
        <form action="{{route('comics.index')}}" method="GET" id="search-form">
         <select name="search" id="search" class="form-control">
             <option value="all">Tutti</option>
         </select>

        </form>
     </div>
    <h1 class="text-center">Fumetti</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{Str::limit($comic->description,80)}}</p>
                  <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Scopri!</a>
                  <a href="{{route('comics.edit', $comic->id )}}" class="btn btn-primary ms-3">Modifica</a>
                </div>
              </div>
        </div>
        @endforeach

    </div>
  </section>

@endsection