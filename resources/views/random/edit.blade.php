@extends('layout')

@section('title', 'Hilo')

@section('content')

    <h1>Editar Hilo</h1>

    @include('partials.session-status')
    


    <form method="POST" action="{{route('random.update', $project)}}">
        @method("PATCH")
 
        @include('partials._form', ['btnText' => 'Actualizar'])
 
    </form> 


    
@endsection