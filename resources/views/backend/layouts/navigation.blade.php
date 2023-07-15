<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('assets/images/' . (Auth::user()->profile_photo != null ? Auth::user()->profile_photo : 'user-default.png') ) }}" alt="">
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
        <li class="nav-item {{ Route::currentRouteName() == 'beginnings' || Route::currentRouteName() == 'beginnings.add' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="fas fa-shield-alt menu-icon"></i>
                <span class="menu-title">Principios</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'beginnings' || Route::currentRouteName() == 'beginnings.add' ? 'show' : '' }}" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'beginnings' ? 'active' : '' }}" href="{{ route('beginnings') }}">Lista de principios</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'beginnings.add' ? 'active' : '' }}" href="{{ route('beginnings.add') }}">Agregar principio</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'regulations' || Route::currentRouteName() == 'regulations.add' ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                aria-controls="editors">
                <i class="fas fa-file-pdf menu-icon"></i>
                <span class="menu-title">Reglamentos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::currentRouteName() == 'regulations' || Route::currentRouteName() == 'regulations.add' ? 'show' : '' }}" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'regulations' ? 'active' : '' }}" href="{{ route('regulations') }}">Lista de reglamentos</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'regulations.add' ? 'active' : '' }}" href="{{ route('regulations.add') }}">Agregar reglamento</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'authorities' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('authorities') }}">
                <i class="fas fa-user-md menu-icon"></i>
                <span class="menu-title">Autoridad</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'document-format' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('document-format') }}">
                <i class="fas fa-file-archive menu-icon"></i>
                <span class="menu-title">Formato documento</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'general-settings' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('general-settings') }}">
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
