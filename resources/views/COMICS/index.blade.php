@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Comics List</h1>

            <table class="my-5">
                <thead>
                    <tr>
                        <th class="p">ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th>More</th>
                        <th class="px-3">Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>

                            <td><a href="{{ route('comics.show', $comic) }}">Details</a></td>

                            <td class="px-3"><a href="{{ route('comics.edit', $comic) }}">Edit</a></td>

                            <td>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%">
                                Not Found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{$comics->links()}}
        </div>
    </section>
@endsection
