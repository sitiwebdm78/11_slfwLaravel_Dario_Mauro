    <nav class="navbar navbar-expand-lg fixed-top fs-5">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <a class="nav-link @if(Route::currentRouteName() === 'rthpnapolimania') active_custom @endif" aria-current="page" href="{{ route('rthpnapolimania') }}">Napolimania</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tours
                        </a>
                        <ul class="dropdown-menu bg_dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="nav-link @if(Route::currentRouteName() === 'visit.rtourtours') active_custom @endif" href="{{ route('visit.rtourtours') }}" >Le Nostre Visite</a></li>
                            <li><a class="nav-link @if(Route::currentRouteName() === 'visit.rtcreate') active_custom @endif" href="{{ route('visit.rtcreate') }}">Richiedi Nuovo Tour</a></li>
                        </ul>
                    </li>
                    <a class="nav-link @if(Route::currentRouteName() === 'rtaboutus') active_custom @endif" href="{{ route('rtaboutus') }}">Chi Siamo</a>
                    <a class="nav-link @if(Route::currentRouteName() === 'rtcontacts') active_custom @endif" href="{{ route('rtcontacts') }}">Contattataci</a> 
                </ul>
            </div>
        </div>
    </nav>