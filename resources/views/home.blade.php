@extends("layouts.default")

@section('page_title', 'HOME')

@section('content')
    <div class="container text-center">
        <h1>HOMEPAGE</h1>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Go to Comics</a>
    </div>
@endsection
