@extends('layout')


@section('title', $project->title)

@section('content')
    
    <h1>Random</h1>


@auth

    <a href="{{route('random.edit', $project)}}">Editar</a>
    
    <form method="POST" action="{{route('random.destroy', $project)}}">
                
        @csrf @method('DELETE')

        <button>Eliminar</button>

    </form>

@endauth




    <br>
    {{$project->title}} 
    <br> 
    <br>
    {{$project->description}}

@endsection