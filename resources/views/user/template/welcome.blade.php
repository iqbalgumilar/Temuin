<section class="welcome2 p-t-40 p-b-55">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="welcome2-inner m-t-60">
                    <div class="welcome2-greeting">
                        <h1 class="title-6">Hi
                            <span>{{ Session::get('username') }}</span>, Welcome back</h1>
                    </div>
                    <form class="form-header form-header2" action="" method="post">
                        <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>