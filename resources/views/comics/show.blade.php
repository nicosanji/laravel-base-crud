@extends("layouts.default")

@section('page_title', 'Comic n°' . $comic->id)

@section('content')

    <div class="container text-center">
        <h2>Title={{ $comic->title }}</h2>
        <h4>Price={{ $comic->price }}</h4>
        <h4>Series={{ $comic->series }}</h4>
        <h4>Type={{ $comic->type }}</h4>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Go to Comics</a>
        <a class="btn btn-primary" href="/">Home</a>
    </div>

@endsection
