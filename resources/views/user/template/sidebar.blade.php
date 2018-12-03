<aside class="menu-sidebar3 js-spe-sidebar">
    <nav class="navbar-sidebar2 navbar-sidebar3">
        <ul class="list-unstyled navbar__list">
            <li class="has-sub">
                <a class="js-arrow" href="{{ url('/user/dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ url('/user/user') }}">
                    <i class="zmdi zmdi-account"></i>User
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ url('/user/profile') }}">
                    <i class="zmdi zmdi-account"></i>Profile
                </a>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-trophy"></i>Features
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ url('/user/web') }}">Web Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv') }}">Curriculum Vitae</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/id') }}">ID Card</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-power"></i>Logout
                </a>
            </li>
        </ul>
    </nav>
</aside>