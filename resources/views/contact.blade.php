@extends('layout')


@section('title', 'Contacto')



@section('content')

<div class="container">

    <h1>Contacto</h1>


@include('partials.session-status')
    
<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('contact')}}">
    @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
        <input class="form-control bg-light shadow-sm border-0" name="name" placeholder="Nombre..." value="{{old('name')}}">
                {!! $errors->first('name', '<small>:message</small><br>') !!}
        </div>    
        <input class="form-control bg-light shadow-sm border-0" type="email" name="email" placeholder="Email..." value="{{ old('email')}}">
                {!! $errors->first('email', '<small>:message</small><br>') !!}  

        <input class="form-control bg-light shadow-sm border-0" name="subject" placeholder="Asunto..." value="{{old('subject')}}">
                {!! $errors->first('subject', '<small>:message</small><br>') !!}  

                <textarea class="form-control bg-light shadow-sm border-0" name="content" placeholder="Mensaje...">{{old('content')}}</textarea>
                {!! $errors->first('content', '<small>:message</small><br>') !!}  

                <button class="btn btn-primary btn-lg btn-block">Enviar</button>

    </form>
</div>
@endsection