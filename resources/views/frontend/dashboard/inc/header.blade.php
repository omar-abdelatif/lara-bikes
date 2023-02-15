<header>
    <!-- NAVBAR -->
    <nav class="admin">
        <div class="container-fluid">
            <div class="admin-nav">
                <div class="admin-right">
                    <div class="admin-name">
                        <i class="fal fa-user-crown"></i>
                        <span>{{$users->name}}</span>
                    </div>
                </div>
                <div class="admin-left">
                    <form action="" method="get">
                        <input class="admin-search" type="search" name="search" id="search"
                            placeholder="Search Here">
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
