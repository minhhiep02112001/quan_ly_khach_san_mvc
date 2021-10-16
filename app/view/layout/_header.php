<div class="responsive-header">
    <div class="res-logo-area">
        <div class="col-sm-18 col-xs-16">
            <div class="logoresponsive">
                <a title="ATR Hotel" href=".<?= WEB_ROOT?>"><img
                        src="<?= WEB_ROOT?>/public/client/uploads/logo_1.png" alt="ATR Hotel" /></a>
            </div>
        </div>

        <div class="col-sm-6 col-xs-8">
            <div id="nav-icons-head">
                <span></span> <span></span> <span></span> <span></span>
            </div>
        </div>
    </div>
    <div class="responsive-menu">
        <a title="ATR Hotel" href="<?= WEB_ROOT?>"><img
                src="<?= WEB_ROOT?>/public/client/uploads/logo_1.png" alt="ATR Hotel" /></a></a>

        <ul>

            <li class="menu-item-has-children"
                rol="presentation">
                <a href="<?= WEB_ROOT?>" title="Dịch vụ">Dịch vụ</a>
            </li>
            <li class="menu-item-has-children"
                rol="presentation">
                <a href="<?= WEB_ROOT?>" title="Hỏi đáp">Hỏi đáp</a>
            </li>
            <li class="menu-item-has-children"
                rol="presentation">
                <a href="<?= WEB_ROOT?>" title="Hướng dẫn">Hướng dẫn</a>
            </li>
            <li class="menu-item-has-children"
                rol="presentation">
                <a href="<?= WEB_ROOT?>" title="Thành viên">Thành viên</a>
            </li>
            <li class="menu-item-has-children"
                rol="presentation">
                <a href="<?= WEB_ROOT?>" title="Liên hệ">Liên hệ</a>
            </li>
        </ul>
        <div class="res-social">
            <a href="#" onclick="modalShowByObj('#guestLogin_nv7', 'recaptchareset')">Thành viên đăng nhập</a>

            <a href="<?= WEB_ROOT?>/register">Đăng ký</a>
        </div>
    </div>
</div>
<header class="header-area fixed header-sticky hidden-xs hidden-sm hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-24">
                <div class="logo">
                    <a title="ATR Hotel" href="<?= WEB_ROOT?>"><img src="<?= WEB_ROOT?>/public/client/uploads/logo_1.png" width="186" height="44" alt="ATR Hotel" /></a>
                    <span class="site_name hidden">ATR Hotel</span>
                    <span class="site_description hidden">Website dành riêng cho hệ thống khách sạn trên toàn quốc.</span>
                </div>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-16 hidden-xs">
                <div class="header-top fix">
                    <div class="header-contact">
                        <div class="list-unstyled"><span><span style="font-size:16px;">Hotline</span>: </span><span><a href="tel:+84905.908430">090.5908430</a></span></div>

                    </div>
                    <?php if(isset($_SESSION['user.login'])): ?>
                        <div class="header-links">

                            <a href="<?= WEB_ROOT?>/information" ><?= $_SESSION['user.login']['name']?></a>

                            <a href="<?= WEB_ROOT?>/logout">Đăng xuất</a>
                        </div>
                    <?php else: ?>
                        <div class="header-links">

                            <a href="<?= WEB_ROOT?>/login" >Đăng nhập</a>

                            <a href="<?= WEB_ROOT?>/register">Đăng ký</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="main-menu hidden-xs">
                    <nav>
                        <ul>
<!--                           -->

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>