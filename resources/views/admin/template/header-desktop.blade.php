<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ url('assets/admin/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Session::get('name') }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ url('assets/admin/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Session::get('name') }}</a>
                                        </h5>
                                        <?php
                                            if(Session::get('level') == "0"){
                                                $level = "Superadmin";
                                            }else if(Session::get('level') == "1"){
                                                $level = "Admin";
                                            }else{
                                                $level = "User";
                                            }
                                        ?>
                                        <span class="email">{{ $level }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ url('admin/logout') }}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>