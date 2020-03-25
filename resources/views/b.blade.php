@extends('layout')


@section('title', 'Random')

@section('content')
    <h1>Random</h1>

    @auth
    <a href="{{route('random.create')}}">Crear otro Hilo</a>    
    @endauth
    

    @include('partials.session-status')

    <ul>

        @foreach ($posteo as $posteoItem)
                    

            <li> <a href="{{route('random.show', $posteoItem)}}">{{$posteoItem->title}}</a> </li>

        @endforeach

        {{$posteo->links()}}

    </ul>


@endsection