@extends('layouts.app')
@section('title', $comic->title)
@section('content')
<section class="container bg-white mt-4">
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$comic->description!!}</p>
            <div>
                Prezzo: {{$comic->price}}
            </div>
            <div>
                Serie: {{$comic->series}}
            </div>
        </div>
    </div>
</section>
@endsection