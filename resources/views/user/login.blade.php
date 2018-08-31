<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login | Investindo</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link rel="stylesheet" href="https://cdn.rawgit.com/tonsky/FiraCode/1.205/distr/fira_code.css">

    </head>
    <body>
        <div class="background">

        </div>
        <section id="conteudo-view" class="login">

            <h1>SINDPESCA</h1>
            <h3>Caapiranga - AM</h3>
            {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
                <p>Acesse o sistema</p>

                <label>
                    {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'usuario']) !!}
                </label>

                <label>
                    {!! Form::password('password', ['placeholder' => 'senha']) !!}  
                </label>

                {!! Form::submit('Entrar') !!}

            {!! Form::close() !!}

        </section>
    </body>
</html>
