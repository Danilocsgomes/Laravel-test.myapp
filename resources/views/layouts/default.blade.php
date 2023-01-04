
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formação de Laravel - @yield('subtitle')</title>
        @stack('css')
    </head>
    <body>
        @section('sidebar')
            <h1>Sidebar</h1>
        @show

        @hasSection('content')
        @endif

        @sectionMissing('content')
            <p>Não tem nenhum conteúdo</p>
        @endif

        @yield('content')

        @stack('scripts')
    </body>
    </html>
