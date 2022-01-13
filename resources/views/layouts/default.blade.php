<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('page_title')</title>

    @include("partials.head_scripts")
</head>

<body>
    <header>
        <div class="container text-center py-3">
            <h1 class="text-primary">DC COMICS HEADER</h1>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container text-center py-3">
            <p class="text-primary">DC COMICS FOOTER</p>
        </div>
    </footer>
</body>

</html>
