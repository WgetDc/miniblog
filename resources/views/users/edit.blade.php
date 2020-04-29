@extends('layout')


@section('title', 'Edicion de usuarios')

@section('content')

    <h1>Edicion de usuarios</h1>

    @if (session()->has('info'))

            <div class="alert alert-success">{{session('info')}}</div>
    
    @endif

@include('partials.session-status')

    <form method="POST" action="{{route('usuarios.update', $user->id)}}">
        @method("PATCH")
        @csrf

        <p><label for="nombre">
            Nombre
        <input class="form-control" type="text" name="name" value="{{$user->name}}">
        {{ $errors->first('name', '<span class="error">:message</span>') }}
        </label></p>

        <p><label for="email">
            Email
        <input class="form-control" type="text" name="email" value="{{$user->email}}">
        {{ $errors->first('email', '<span class="error">:message</span>') }}
        </label></p>
        <input class="btn btn-primary" type="submit" value="Enviar">

    </form>
@endsection