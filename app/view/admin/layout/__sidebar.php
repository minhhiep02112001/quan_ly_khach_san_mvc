
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $_SESSION['admin.login']['image'] ?? './public/admin/img/images.png'?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?=$_SESSION['admin.login']['name']?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="<?= activeMenu("/admin") ?>">
                <a href="./admin" >
                    <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                </a>
            </li>
            <li class="<?= activeMenu("/admin/order(\.*)") ?>">
                <a href="./admin/order">
                    <i class="fa fa-th"></i> <span>Quản lý đặt phòng</span>
                </a>
            </li>
            <li class="<?= activeMenu("/admin/room(\.*)") ?>">
                <a href="./admin/room">
                    <i class="fa fa-th"></i> <span>Quản lý phòng</span>
                </a>
            </li>
            <li class="<?= activeMenu("/admin/article(\.*)") ?>">
                <a href="./admin/article">
                    <i class="fa fa-th"></i> <span>Quản lý bài viết</span>
                </a>
            </li>
            <li class="<?= activeMenu("/admin/customer(\.*)") ?>">
                <a href="./admin/customer">
                    <i class="fa fa-th"></i> <span>Quản lý nhân viên</span>
                </a>
            </li>
            <li class="<?= activeMenu("/admin/user(\.*)") ?>">
                <a href="./admin/user">
                    <i class="fa fa-th"></i> <span>Quản lý khách hàng</span>
                </a>
            </li>
            <li>
                <a href="./admin/logout" class="logout">
                    <i class="fa fa-th"></i> <span>Đăng Xuất</span>
                </a>
            </li>

        </ul>
    </section>
