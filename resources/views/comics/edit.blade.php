@extends("layouts.default")

@section('page_title', 'COMICS EDIT')

@section('content')
    <div class="container text-center">
        <h2>Editing: {{ $comic->title }}</h2>
    </div>
    <div class="container">
        {{-- errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                Errors in form:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- FORM EDIT --}}
        <form action=" {{ route('comics.update', ['id' => $comic->id]) }} " method="post">
            @csrf
            {{-- method per edit --}}
            @method('PUT')
            {{-- title --}}
            <div class="mb-2">
                <label for="field_title" class="form-label">Title</label>
                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title"
                    id="field_title">
                @if ($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->get('title')[0] }}
                    </div>
                @endif
            </div>
            {{-- description --}}
            <div class="mb-2">
                <label for="field_description" class="form-label">Description</label>
                <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                    name="description" id="field_description">
                @if ($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->get('description')[0] }}
                    </div>
                @endif
            </div>
            {{-- thumb --}}
            <div class="mb-2">
                <label for="field_thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control {{ $errors->has('thumb') ? 'is-invalid' : '' }}" name="thumb"
                    id="field_thumb">
                @if ($errors->has('thumb'))
                    <div class="invalid-feedback">
                        {{ $errors->get('thumb')[0] }}
                    </div>
                @endif
            </div>
            {{-- price --}}
            <div class="mb-2">
                <label for="field_price" class="form-label">Price</label>
                <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price"
                    id="field_price">
                @if ($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->get('price')[0] }}
                    </div>
                @endif
            </div>
            {{-- series --}}
            <div class="mb-2">
                <label for="field_series" class="form-label">Series</label>
                <input type="text" class="form-control {{ $errors->has('series') ? 'is-invalid' : '' }}" name="series"
                    id="field_series">
                @if ($errors->has('series'))
                    <div class="invalid-feedback">
                        {{ $errors->get('series')[0] }}
                    </div>
                @endif
            </div>
            {{-- sale date --}}
            <div class="mb-2">
                <label for="field_sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control {{ $errors->has('sale_date') ? 'is-invalid' : '' }}"
                    name="sale_date" id="field_series">
                @if ($errors->has('sale_date'))
                    <div class="invalid-feedback">
                        {{ $errors->get('sale_date')[0] }}
                    </div>
                @endif
            </div>
            {{-- type --}}
            <div class="mb-2">
                <label for="field_type" class="form-label">Type</label>
                <input type="text" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type"
                    id="field_series">
                @if ($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->get('type')[0] }}
                    </div>
                @endif
            </div>

            <div>
                <button class="btn btn-secondary" type="reset ">Reset</button>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>

        </form>
        <div class="container text-center">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Go to Comics</a>
            <a class="btn btn-primary" href="/">Home</a>
        </div>
    </div>
@endsection
