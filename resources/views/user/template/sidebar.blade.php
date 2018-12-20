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
                    <i class="fas fa-globe"></i>Web Profile
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ url('/user/cv/about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/experience') }}">Experiences</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/education') }}">Education</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/skill') }}">Skills</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/portfolio') }}">Portofolio</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/awards') }}">Awards</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-user-circle"></i>CV Online
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ url('/user/cv/about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/experience') }}">Experiences</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/education') }}">Education</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/skill') }}">Skills</a>
                    </li>
                    <li>
                        <a href="{{ url('/user/cv/awards') }}">Awards</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/user/id') }}"><i class="fas fa-id-card"></i>ID Card</a>
            </li>
            <li>
                <a href="{{ url('user/logout') }}">
                    <i class="zmdi zmdi-power"></i>Logout
                </a>
            </li>
        </ul>
    </nav>
</aside>