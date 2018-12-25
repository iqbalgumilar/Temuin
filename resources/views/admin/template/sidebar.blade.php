<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ url('assets/admin/images/icon/logo.png') }}" alt="Cool Admin" />
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
                        <i class="fas fa-cubes"></i>Master</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ url('/admin/skills') }}"><i class="fas fa-crosshairs"></i> Skills</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/works') }}"><i class="fas fa-briefcase"></i> Works</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/services') }}"><i class="fas fa-coffee"></i> Services</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/JenisProduk') }}"><i class="fas fa-boxes"></i> Jenis Produk</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/admin/Produk') }}"><i class="fas fa-box"></i> Produk</a>
                </li>
                <li>
                    <a href="{{ url('/admin/admin') }}">
                        <i class="fas fa-users"></i>Admin</a>
                </li>
                <li>
                    <a href="{{ url('admin/logout') }}">
                        <i class="fa fa-arrow-left"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>