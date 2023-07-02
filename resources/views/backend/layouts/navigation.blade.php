<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('assets/images/faces/face5.jpg') }}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome Jane
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('widgets') }}">
                <i class="fa fa-puzzle-piece menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="far fa-compass menu-icon"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('accordions') }}">Accordions</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('buttons') }}">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('badges') }}">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('breadcrumbs') }}">Breadcrumbs</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('dropdowns') }}">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('modals') }}">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('progress') }}">Progress bar</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('pagination') }}">Pagination</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('tabs') }}">Tabs</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('typography') }}">Typography</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('tooltips') }}">Tooltips</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <i class="fas fa-clipboard-list menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('dragula') }}">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('clipboard') }}">Clipboard</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('context-menu') }}">Context
                            menu</a></li>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('loaders') }}">Loaders</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="fab fa-wpforms menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('basic_elements') }}">Basic
                            Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('advanced_elements') }}">Advanced
                            Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('validation') }}">Validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('wizard') }}">Wizard</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                aria-controls="editors">
                <i class="fas fa-pen-square menu-icon"></i>
                <span class="menu-title">Editors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('text_editor') }}">Text
                            editors</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="fas fa-chart-pie menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('chartjs') }}">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('morris') }}">Morris</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="fas fa-table menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('basic-table') }}">Basic
                            table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('data-table') }}">Data
                            table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('sortable-table') }}">Sortable
                            table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('popups') }}">
                <i class="fas fa-minus-square menu-icon"></i>
                <span class="menu-title">Popups</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('notifications') }}">
                <i class="fas fa-bell menu-icon"></i>
                <span class="menu-title">Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="fa fa-stop-circle menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('font-awesome') }}">Font
                            Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('simple-line-icon') }}">Simple line
                            icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('themify') }}">Themify
                            icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}"> Login
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('lock-screen') }}">
                            Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="fas fa-exclamation-circle menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('error-404') }}"> 404
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('error-500') }}"> 500
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false"
                aria-controls="e-commerce">
                <i class="fas fa-shopping-cart menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('orders') }}"> Orders
                        </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
