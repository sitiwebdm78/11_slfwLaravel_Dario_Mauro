    <nav class="navbar navbar-expand-lg fixed-top fs-5">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                 @guest
                <ul class="navbar-nav me-auto">
                    <a class="nav-link @if(Route::currentRouteName() === 'rthpnapolimania') active_custom @endif" aria-current="page" href="{{ route('rthpnapolimania') }}">Napolimania</a>
                    <li><a class="nav-link @if(Route::currentRouteName() === 'visit.rtourtours') active_custom @endif" href="{{ route('visit.rtourtours') }}" >I Nostri Tours</a></li>
                    <a class="nav-link @if(Route::currentRouteName() === 'rtaboutus') active_custom @endif" href="{{ route('rtaboutus') }}">Chi Siamo</a>
                    <a class="nav-link @if(Route::currentRouteName() === 'rtcontacts') active_custom @endif" href="{{ route('rtcontacts') }}">Contattataci</a>     
                </ul>
                @endguest
                @auth
                 <ul class="navbar-nav me-auto">
                    <a class="nav-link @if(Route::currentRouteName() === 'rthpnapolimania') active_custom @endif" aria-current="page" href="{{ route('rthpnapolimania') }}">Napolimania</a>
                    <li><a class="nav-link @if(Route::currentRouteName() === 'visit.rtcreate') active_custom @endif" href="{{ route('visit.rtcreate') }}">Richiedi Nuovo Tour</a></li>
                    <li>
                        <a class="nav-link @if(Route::currentRouteName() === 'mytours.create') active_custom @endif" href="{{ route('mytours.create') }}">Salva Tours Preferiti</a>
                    </li>
                    <li>
                        <a class="nav-link @if(Route::currentRouteName() === 'mytours.index') active_custom @endif" href="{{ route('mytours.index') }}">I Tuoi Tours Preferiti</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flexo">
                    <li class="nav-item me-4">
                        <p class="nav-link" href="#"> {{Auth::user()->name}}</p>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{route('logout')}}" class="nav-link">
                            @csrf
                            <button class="nav-link p-0" type="submit">Logout </button>
                        </form>
                    </li>
                </ul>
                @endauth
                <ul class="navbar-nav d-flex me-5">                    
                    @guest
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('register')}}">Registrati</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('login')}}">Accedi</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>