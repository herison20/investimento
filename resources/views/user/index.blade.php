@extends('templates.master')


@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')

    {!! Form::open(['method' => 'post', 'class' => 'form-padrao']) !!}

        @include('templates.formulario.input', ['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
        @include('templates.formulario.input', ['label' => 'Nome','input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
        @include('templates.formulario.input', ['label' => 'Telefone','input' => 'phone', 'attributes' => ['placeholder' => 'Telefone']])
        @include('templates.formulario.input', ['label' => 'E-mail','input' => 'email', 'attributes' => ['placeholder' => 'Email']])
        @include('templates.formulario.password', ['label' => 'Senha','input' => 'password', 'attributes' => ['placeholder' => 'Senha']])
        @include('templates.formulario.submit', ['input' => 'Cadastrar'])
    
    {!! Form::close() !!}

@endsection