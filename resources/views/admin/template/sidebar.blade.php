<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ url('/admin') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Master</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ url('/admin/skills') }}">Skills</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/works') }}">Works</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/logout') }}">
                        <i class="fa fa-arrow-left"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>