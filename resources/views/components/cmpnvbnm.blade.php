<nav class="navbar navbar-expand-lg fixed-top fs-5 text-align-center">
    <div class="btn-group ms-5">
        <a class="btn btn-secondary nav-link @if(Route::currentRouteName() === 'rthpnapolimania') active_custom @endif" 
        href="{{ route('rthpnapolimania') }}">
        Napolimania
        </a>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu bg_dropdown fs-5">
            <li class="ms-2 liwidth">
                <a class="nav-link @if(Route::currentRouteName() === 'visit.rtourtours') active_custom @endif" href="{{ route('visit.rtourtours') }}" >Tutti i Tours</a>
            </li>
             <li class="ms-2">
                <a class="nav-link @if(Route::currentRouteName() === 'category.create') active_custom @endif" href="{{ route('category.create') }}" >Aggiungi Categoria al Tour</a>
            </li>
             <li class="ms-2">
                <a class="nav-link @if(Route::currentRouteName() === 'category.index') active_custom @endif" href="{{ route('category.index') }}" >Filtra Per Categoria</a>
            </li>
        </ul>
    </div>
    @guest
    <ul class="nav-link list-unstyled d-flex">
    <li class="ms-2"> 
        <a class="nav-link @if(Route::currentRouteName() === 'rtaboutus') active_custom @endif" href="{{ route('rtaboutus') }}">Chi Siamo</a>
    </li>
    <li class="ms-2">
        <a class="nav-link @if(Route::currentRouteName() === 'rtcontacts') active_custom @endif" href="{{ route('rtcontacts') }}">Contattataci</a>
    </li>
    </ul>
    @endguest
    @auth
    <ul class="navbar-nav">
        <li><a class="nav-link @if(Route::currentRouteName() === 'visit.rtcreate') active_custom @endif" href="{{ route('visit.rtcreate') }}">Richiedi un Tour</a></li>
        <li>
            <a class="nav-link @if(Route::currentRouteName() === 'mytours.create') active_custom @endif" href="{{ route('mytours.create') }}">Salva Tours Preferiti</a>
        </li>
        <li>
            <a class="nav-link @if(Route::currentRouteName() === 'mytours.index') active_custom @endif" href="{{ route('mytours.index') }}">I Tuoi Tours</a>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto">
        <li>
            <p class="nav-link" href="#"> {{Auth::user()->name}}</p>
        </li>
        <li>
            <form method="POST" action="{{route('logout')}}" class="nav-link">
                @csrf
                <button class="nav-link me-3" type="submit">Logout </button>
            </form>
        </li>
    </ul>
    @endauth
    @guest
    <ul class="navbar-nav d-flex ms-auto">                    
        <li class="nav-item me-3">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item me-3">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
    </ul>
    @endguest
</nav>