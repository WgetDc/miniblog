@extends('layout')

@section('title', 'Hilo')

@section('content')

    <h1>Hilo</h1>

    
    @include('partials.validation-errors')


    <form method="POST" action="{{route('random.store')}}">        
    
        @include('partials._form', ['btnText' => 'Crear'])
       
    </form> 


    
@endsection