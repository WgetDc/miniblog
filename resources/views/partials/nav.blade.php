<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">

         <a class="navbar-brand" href="{{route('home')}}">

        {{config('app.name')}}

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
            <ul class="nav nav-pills">

                <li class="nav-item">
                    <a class="nav-link {{setActive('home')}}" 
                        href="{{route('home')}}"
                        >@lang('Home')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{setActive('random.*')}}"
                        href="{{route('random.index')}}"
                        >@lang('Random')</a></li>
                <li class="nav-item">
                    <a class="nav-link {{setActive('fee')}}" 
                        href="{{route('fee')}}"
                        >@lang('Fee')</a></li>
                <li class="nav-item">
                    <a class="nav-link {{setActive('reglas')}}" 
                        href="{{route('reglas')}}"
                        >@lang('Reglas')</a></li>
                <li class="nav-item">
                    <a class="nav-link {{setActive('tra')}} " 
                        href="{{route('tra')}}"
                        >@lang('Traders')</a>
                </li>

                @guest
                    
                    <li class="nav-item">
                        <a class="nav-link" {{setActive('login')}}
                        href="{{route('login')}}"
                        >@lang('Login')</a>
                    </li>    

                @else

                @if (auth()->user()->hasRoles(['admin', 'mod']))
                <li class="nav-item">
                    <a class="nav-link" {{setActive('usuarios')}}
                    href="{{route('users.index')}}"
                    >@lang('Usuarios')</a>
                </li> 
                @endif

                    <li class="nav-item">
                        <a class="nav-link" {{setActive('Cerrar Sesion')}} 
                        href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                    </li>
                    <li>
                    <a href="/usuarios/{{auth()->id()}}/edit">Mi cuenta</a>
                    </li>

 
                @endguest
                
 
  
               
                
        
            </ul>
        </div>

</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>