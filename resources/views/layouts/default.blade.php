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
        <div class="container text-center">
            <h4>COMICS HEADER</h4>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container text-center">
            <h4>COMICS FOOTER</h4>
        </div>
    </footer>
</body>

</html>
