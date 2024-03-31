@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    
    <section>
        <div class="container py-4">

            <a class="btn btn-success my-2" href="{{route('comics.index')}}"><- Go Back</a>


            <h1>{{ $comic->id }} : {{$comic->title}}</h1>

            <div class="row">

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Thumb</h3>
                            <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Description:</h3>
                            <div>{{$comic->description}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection