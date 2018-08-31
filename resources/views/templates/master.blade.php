<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sindpesca</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/tonsky/FiraCode/1.205/distr/fira_code.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        @yield('css-view')
    </head>
    <body>
        @include('templates.menu-lateral')

        <section id="view-conteudo">
                @yield('conteudo-view')
        </section>
        


        @yield('js-view')
    </body>
</html>