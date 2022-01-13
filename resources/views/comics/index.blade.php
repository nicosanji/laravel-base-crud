@extends("layouts.default")

@section('page_title', 'COMICS INDEX')

@section('content')
    <div class="container text-center">
        <h1>INDEX</h1>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Add a Comic</a>
    </div>
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li><a href="{{ route('comics.show', $comic->id) }} ">{{ $comic['title'] }}</a><span>
                        ({{ $comic['type'] }})</span></li>
            @endforeach
        </ul>
    </div>
    <div class="container text-center">
        <a class="btn btn-primary" href="/">Home</a>
    </div>
@endsection
