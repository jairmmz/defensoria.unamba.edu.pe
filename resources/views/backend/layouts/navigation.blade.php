<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('assets/images/' . (Auth::user()->profile_photo != null ? Auth::user()->profile_photo : 'users/user-default.png') ) }}" alt="">
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{ Auth::user()->username }}
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->role == 'superadmin')
            <li class="nav-item {{ Route::currentRouteName() == 'users' || Route::currentRouteName() == 'users.add' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="far fa-user menu-icon"></i>
                    <span class="menu-title">Usuarios</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'users' || Route::currentRouteName() == 'users.add' ? 'show' : '' }}" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'users' ? 'active' : '' }}" href="{{ route('users') }}">Lista de usuarios</a></li>
                        <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'users.add' ? 'active' : '' }}" href="{{ route('users.add') }}">Añadir usuario</a></li>
                    </ul>
                </div>
            </li>
        @endif
        <li class="nav-item {{ Route::currentRouteName() == 'news' || Route::currentRouteName() == 'news.add' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <i class="fas fa-clipboard-list menu-icon"></i>
                <span class="menu-title">Noticias</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'news' || Route::currentRouteName() == 'news.add' ? 'show' : '' }}" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'news' ? 'active' : '' }}" href="{{ route('news') }}">Lista de noticias</a></li>
                    <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'news.add' ? 'active' : '' }}" href="{{ route('news.add') }}">Agregar noticia</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'regulations' || Route::currentRouteName() == 'regulations.add' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                aria-controls="editors">
                <i class="fas fa-file-pdf menu-icon"></i>
                <span class="menu-title">Documentos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'regulations' || Route::currentRouteName() == 'regulations.add' ? 'show' : '' }}" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'regulations' ? 'active' : '' }}" href="{{ route('regulations') }}">Lista de documentos</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'regulations.add' ? 'active' : '' }}" href="{{ route('regulations.add') }}">Agregar documento</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'attention-form-index' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('attention-form-index') }}">
                <i class="fas fa-list menu-icon"></i>
                <span class="menu-title">Atención de casos</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'authorities' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('authorities') }}">
                <i class="fas fa-crown menu-icon"></i>
                <span class="menu-title">Autoridad</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('settings') }}">
                <i class="fas fa-cog menu-icon"></i>
                <span class="menu-title">Ajustes generales</span>
            </a>
        </li>
        <li class="nav-item">
            <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-window-close menu-icon"></i>
                    <span class="menu-title">Cerrar sesión</span>
                </a>
            </form>
        </li>
    </ul>
</nav>
