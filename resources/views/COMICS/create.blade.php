@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')

    <section>
        <div class="container py-4">

            <h1>Add New Comic!</h1>

            {{-- FORM --}}
            <form action="{{ route('comics.store')}}" method="POST" class="row d-flex">
                @csrf

            
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="thumb">Thumb Url</label>
                            <input class="form-control" type="url" name="thumb" id="thumb">
                        </div>

                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="12" type="text" name="description" id="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="series">Series</label>
                            <input class="form-control" type="text" name="series" id="series">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="type">Type</label>
                            <input class="form-control" type="text" name="type" id="type">
                        </div>

                        <div class="col-6">
                            <label class="form-label" for="sale_date">Sale Date</label>
                            <input class="form-control" type="date" name="sale_date" id="sale_date">
                        </div>
                        
                        <div class="col-6">
                            <label class="form-label" for="price">Price</label>
                            <input class="form-control" type="text" name="price" id="price">
                        </div>
                    </div>
                </div>

                <div class="col-3 pt-3">
                    <button class="btn btn-primary">Save!</button>
                </div>
                
            </form>
        </div>
    </section>

@endsection
