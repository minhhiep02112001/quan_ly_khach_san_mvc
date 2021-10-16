<?php
if(isset($_SESSION['validate_data'])){
    extract($_SESSION['validate_data']);
    unset($_SESSION['validate_data']);
}

if(isset($_SESSION['success'])){
    extract($_SESSION['success']);
    unset($_SESSION['success']);
}

?>

<!DOCTYPE html>

<html lang="vi" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">


<!-- Mirrored from bookinghotel.mynukeviet.com/vi/users/register/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 14:39:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title></title>
    <meta name="description" content="Đăng ký thành viên - Đăng ký - Thành viên - http&#x3A;&#x002F;&#x002F;bookinghotel.mynukeviet.com&#x002F;vi&#x002F;users&#x002F;register&#x002F;" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="twitter:card" content="summary" />
    <meta name="author" content="ATR Hotel" />
    <meta name="copyright" content="ATR Hotel [tdfoss@contact.vn]" />
    <meta name="robots" content="index, archive, follow, noodp" />
    <meta name="googlebot" content="index,archive,follow,noodp" />
    <meta name="msnbot" content="all,index,follow" />
    <meta name="generator" content="NukeViet v4.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Đăng ký thành viên" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Đăng ký thành viên - Đăng ký - Thành viên - http&#x3A;&#x002F;&#x002F;bookinghotel.mynukeviet.com&#x002F;vi&#x002F;users&#x002F;register&#x002F;" />
    <meta property="og:site_name" content="ATR Hotel" />
    <meta property="og:url" content="index.html" />
    <link rel="shortcut icon" href="<?= WEB_ROOT?>/public/client/uploads/logo-xs.png">
    <link rel="canonical" href="index.html">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/assets/css/font-awesome.min5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/bootstrap.min5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/simple-line-icons5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/owl.carousel5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/owl.transitions5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/rateit5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/bootstrap-select.min5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/global_category5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/main5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/blue5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/assets/stylesheets/jednotka_green5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/style5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/menu_mobile_news105a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/style_15a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/style.responsive5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/users5a50.css?t=13">
    <link type="text/css" href="<?= WEB_ROOT?>/public/client/assets/js/jquery-ui/jquery-ui.min5a50.css?t=13" rel="stylesheet" />
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/default/css/popup5a50.css?t=13">
    <link rel="StyleSheet" href="<?= WEB_ROOT?>/public/client/themes/hotel01/css/contact25a50.css?t=13">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <ion-content padding> <ion-refresher (ionRefresh)="doRefresh($event)"> <ion-refresher-content> </ion-refresher-content> </ion-refresher> <ion-card *ngFor="let ticket of currentTickets"> <ion-card-header> </ion-card-header> <ion-card-content>

                <div></div>

            </ion-card-content> </ion-card> </ion-content>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
</head>

<body>

<noscript>
    <div class="alert alert-danger">Trình duyệt của bạn đã tắt chức năng hỗ trợ JavaScript.<br />Website chỉ làm việc khi bạn bật nó trở lại.<br />Để tham khảo cách bật JavaScript, hãy click chuột <a href="http://wiki.nukeviet.vn/support:browser:enable_javascript">vào đây</a>!</div>
</noscript>
<body class="cnt-home">
<?php include_once 'layout/_header.php'?>
<div class="body-content maincontent">
    <div class="breadcrumb">
        <div class="breadcrumb-inner">
            <div class="img_detail_page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <ul class="list-inline list-unstyled text-center">
                                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                        href="<?= WEB_ROOT?>/" itemprop="url"
                                        title="Thành viên"><span class="txt"
                                                                 itemprop="title">Thành viên</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-24" style="padding: 0">
                <div class="row centered margin-top-lg margin-bottom-lg">
                    <div style="min-width:300px">
                        <div class="page panel panel-default box-shadow bg-lavender">
                            <div class="panel-body">
                                <h2 class="text-center margin-bottom-lg">Đăng ký thành viên</h2>
                                <form action="<?= WEB_ROOT?>/register/post" method="post">
                                    <?php if(isset($error)):?>
                                        <div class="error">
                                            <ul style="margin-bottom: 10px;">
                                                <?php foreach($error as $val): ?>
                                                    <li class="text-danger"> <?= $val ?> </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>

                                    <?php endif;?>
                                    <?php if(isset($status)):?>
                                        <p style="padding: 7px 5px ; background: greenyellow; color: $fff"><?=$status?></p>
                                    <?php endif;?>
                                    <div class="form-detail">

                                        <div class="form-group">
                                            <div>
                                                <input type="text" class="form-control required input" placeholder="Tên" value="<?= $old['name'] ?? '' ?>" name="name"  >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <input type="email" class="required form-control" placeholder="Email" value="<?= $old['email'] ?? '' ?>" name="email"  >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <input type="text" class="required form-control" placeholder="Số điện thoại" value="<?= $old['phone'] ?? '' ?>" name="phone" >
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div>
                                                <input type="password" autocomplete="off" class="password required form-control" placeholder="Mật khẩu" value="" name="password" >
                                            </div>
                                        </div>
                                        <div class="text-center margin-bottom-lg">
                                            <button type="submit" class="btn btn-primary">Đăng ký thành viên</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="margin-top-lg">
                                    <ul class="users-menu nav navbar-nav">
                                        <li><a href="<?= WEB_ROOT?>/login "><em class="fa fa-caret-right margin-right-sm"></em>Đăng nhập</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='fanback'>
                    <div id='fan-exit'></div>
                    <div id='MorganAndMen'>
                        <div id='TheBlogWidgets'></div>
                        <div class='remove-borda'></div>
                        <div class="popup_content" style="width: 480px"><div style="text-align:center"><img alt="17979" src="<?= WEB_ROOT?>/public/client/uploads/about/17979.jpg" style="width:100%" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="footer color-bg ">
    <div class="contact_formnot">
        <div class="container">
            <div class="row">
                <div class="col-md-16 col-sm-24 offset-4">
                    <div class="col-xs-24">
                        <div class="main-title-area text-center ">
                            <h2 class="title left-right-line m-b10 m-t10"><a href="#">Đăng kí đặt phòng hôm nay</a></h2>
                        </div>
                    </div>
                    <div id="contactButton">
                        <button type="button" class="ctb btn btn-primary btn-sm" data-module="contact"><em class="fa fa-pencil-square-o"></em>Gửi phản hồi</button>
                        <div class="clearfix">
                            <div data-cs="a123d586d405f6854240fd94e3e26976"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="logo_footer">
        <div class="row">
            <div class="col-xs-24 col-md-24 col-sm-24 no-padding">
                <img class="social" src="<?= WEB_ROOT?>/public/client/uploads/logo_1.png" width="186" height="44" alt="ATR Hotel" />
                <!-- <h3 class="visible-xs-inline-block">Chúng tôi trên mạng xã hội</h3> -->
                <div class="social-media">
                    <a href="https://www.facebook.com/nukeviet" target="_blank"><i class="fa fa-facebook fb"></i></a>
                    <a href="https://www.google.com/+nukeviet" target="_blank"><i class="fa fa-google-plus gp"></i></a>
                    <a href="https://www.youtube.com/user/nukeviet" target="_blank"><i class="fa fa-youtube yt"></i></a>
                    <a href="https://twitter.com/nukeviet" target="_blank"><i class="fa fa-twitter tt"></i></a>
                    <a href="<?= WEB_ROOT?>/feeds/index.html"><i class="fa fa-rss rs"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="backcover">
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-sm-12 col-md-6 panel-body menu_footer2">
                    <div class="module-heading">
                        <h4 class="module-title">Thông tin khách sạn</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled superfish'>
                            <li><a href="<?= WEB_ROOT?>/about/index.html" title="Giới thiệu">Giới thiệu</a></li>
                            <li><a href="<?= WEB_ROOT?>/news/index.html" title="Tin Tức">Tin Tức</a></li>
                            <li><a href="<?= WEB_ROOT?>/hop-dap/index.html" title="Hỏi đáp">Hỏi đáp</a></li>
                            <li><a href="<?= WEB_ROOT?>/contact/index.html" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-12 col-md-6 panel-body menu_footer2">
                    <div class="module-heading">
                        <h4 class="module-title">HD đặt phòng thanh toán</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled superfish'>
                            <li><a href="<?= WEB_ROOT?>/guide-tourist/huong-dan-thanh-toan.html" title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a></li>
                            <li><a href="<?= WEB_ROOT?>/guide-tourist/huong-dan-dat-phong.html" title="Hướng dẫn đặt phòng">Hướng dẫn đặt phòng</a></li>
                            <li><a href="<?= WEB_ROOT?>/guide-tourist/index.html" title="Hướng dẫn đặt phòng trực tuyến">Hướng dẫn đặt phòng trực tuyến</a></li>
                            <li><a href="<?= WEB_ROOT?>/guide-tourist/huong-dan-tim-kiem-can-ho.html" title="Hướng dẫn tìm kiếm căn hộ">Hướng dẫn tìm kiếm căn hộ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-12 col-md-6 panel-body menu_footer2">
                    <div class="module-heading">
                        <h4 class="module-title">NGỌC HOA Hotel</h4>
                    </div>
                    <div class="module-body">
                        <!-- <div class="module-body"> -->
                        <ul class="company_info  toggle-footer">
                            <!-- 		<li class="media"> -->
                            <!-- 			<div class="pull-left"> -->
                            <!-- 				<span itemprop="image">http://bookinghotel.mynukeviet.com/uploads/logo_1.png</span> <span -->
                            <!-- 					itemprop="priceRange">N/A</span> -->
                            <!-- 			</div> -->
                            <!-- 		</li> -->
                            <li class="media">
                                <div class="pull-left">
                                    <em class="fa fa-file-text"></em>
                                </div>
                                <div class="media-body">
                                    <span>M.S.D.N: 0313507870</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left">
                                    <em class="fa fa-flag"></em>
                                </div>
                                <div class="media-body">
								<span>Chịu trách nhiệm: <span
                                        itemprop="founder" itemscope
                                        itemtype="http://schema.org/Person"><span
                                            itemprop="name">Hồ Ngọc Triển</span></span>
								</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left">
                                    <em class="fa fa-map-marker"></em>
                                </div>
                                <div class="media-body">
                                    <span>Địa chỉ:161 Tôn Thất Thuyết, Phường 5, TP Đông Hà, Quảng Trị</span>
                                    </a>
                                </div>
                            </li>
                            <li class="media company_phone">
                                <div class="pull-left">
                                    <em class="fa fa-phone"></em>
                                </div>
                                <div class="media-body">
								<span><span style="display:block">Điện thoại:+84-233.6270610&#91;+84233.6270610&#93;
										<a class="margin-left-0" href="tel:+84905.908430">
								</a>
								</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-12 col-md-6 panel-body menu_footer2">
                    <div class="module-heading">
                        <h4 class="module-title">Chúng tôi trên FB</h4>
                    </div>
                    <div class="module-body">
                        <div class="nv-block-fanpage text-center">
                            <div id="fb-root"></div>
                            <div class="fb-page" data-href="https://www.facebook.com/facebook/"
                                 data-width="270"
                                 data-height="70"
                                 data-tabs="timeline"
                                 data-small-header="false"
                                 data-adapt-container-width="true"
                                 data-hide-cover="false"
                                 data-show-facepile="false" >
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/facebook/">
                                        <a href="https://www.facebook.com/facebook/">Androidsvn.Com</a>
                                    </blockquote>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="col-xs-24 col-sm-24 col-md-24 contact_default">

            <div class="copyright">
    <span>&copy;&nbsp;Bản quyền thuộc về
    <a href="http://bookinghotel.mynukeviet.com/">
    ATR Hotel
    </a>
    .&nbsp;
    </span>
                <span>Mã nguồn <a href="http://nukeviet.vn/" target="_blank">NukeViet CMS</a>.&nbsp;
    </span>
                <span>Thiết kế bởi
        <a href="http://tdfoss.vn/" target="_blank">
            TDFOSS.,LTD
    </a>
    .&nbsp;
    </span>
            </div>

        </div>
        <div class="bttop">
            <a class="pointer"><em class="fa fa-eject fa-lg"></em></a>
        </div>
    </div>
</footer>
<div itemtype="https://schema.org/Electrician">
    <div itemtype="http://schema.org/additionalProperty" itemscope="">
        <div class="location_seo" style="display: none !important">
            <span itemprop="keywords"><a rel="tag" href="http://shop15.mynukeviet.com/">SHOP15</a></span>
        </div>
    </div>
</div>

<div id="guestLogin_nv7" class="hidden">
    <div class="page panel panel-default bg-lavender box-shadow">
        <div class="panel-body">
            <h3 id="loginBarHandle" class="h3_login">
                <label for="LoginControl"><a href="#" class="OverlayTrigger concealed noOutline">Thành viên đăng nhập</a></label>
            </h3>
            <form action="http://bookinghotel.mynukeviet.com/vi/users/login/" method="post" onsubmit="return login_validForm(this);" autocomplete="off" novalidate>
                <div class="nv-info margin-bottom" data-default="Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên site">Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên site</div>
                <div class="form-detail">
                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-user fa-lg"></em></span>
                            <input type="text" class="required form-control" placeholder="Tên đăng nhập hoặc email" value="" name="nv_login" maxlength="100" data-pattern="/^(.){3,}$/" onkeypress="validErrorHidden(this);" data-mess="Tên đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="password" autocomplete="off" class="required form-control" placeholder="Mật khẩu" value="" name="nv_password" maxlength="100" data-pattern="/^(.){3,}$/" onkeypress="validErrorHidden(this);" data-mess="Mật khẩu đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep2 hidden">
                        <label class="margin-bottom">Nhập mã xác minh từ ứng dụng Google Authenticator</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 6 chữ số" value="" name="nv_totppin" maxlength="6" data-pattern="/^(.){6,}$/" onkeypress="validErrorHidden(this);" data-mess="Nhập mã 6 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>

                    <div class="form-group loginstep3 hidden">
                        <label class="margin-bottom">Nhập một trong các mã dự phòng bạn đã nhận được.</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 8 chữ số" value="" name="nv_backupcodepin" maxlength="8" data-pattern="/^(.){8,}$/" onkeypress="validErrorHidden(this);" data-mess="Nhập mã 8 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>
                    <div class="text-center margin-bottom-lg">
                        <input type="button" value="Thiết lập lại" class="btn btn-default" onclick="validReset(this.form);return!1;" />
                        <button class="bsubmit btn btn-primary" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= WEB_ROOT?>/public/client/assets/js/jquery/jquery.min5a50.js?t=13"></script>
<script data-ad-client="ca-pub-6482774583325006" async src="<?= WEB_ROOT?>/public/client/.<?= WEB_ROOT?>/pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>var nv_base_siteurl="http://bookinghotel.mynukeviet.com/",nv_lang_data="vi",nv_lang_interface="vi",nv_name_variable="nv",nv_fc_variable="op",nv_lang_variable="language",nv_module_name="users",nv_func_name="register",nv_is_user=0, nv_my_ofs=7,nv_my_abbr="+07",nv_cookie_prefix="nv4",nv_check_pass_mstime=1738000,nv_area_admin=0,nv_safemode=0,theme_responsive=1,nv_is_recaptcha=0;</script>
<script src="<?= WEB_ROOT?>/public/client/assets/js/language/vi5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/assets/js/global5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/users5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/main5a50.js?t=13"></script>
<script type="text/javascript" data-show="after">
    $(function() {
        checkWidthMenu();
        $(window).resize(checkWidthMenu);
    });
</script>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50){
            $(".header-area").addClass("sticky");
        }
        else{
            $(".header-area").removeClass("sticky");
        }
    });
</script>
<script type="text/javascript" src="<?= WEB_ROOT?>/public/client/assets/js/jquery-ui/jquery-ui.min5a50.js?t=13"></script>
<script type="text/javascript" src="<?= WEB_ROOT?>/public/client/assets/js/language/jquery.ui.datepicker-vi5a50.js?t=13"></script>
<script type="text/javascript" src="<?= WEB_ROOT?>/public/client/themes/default/js/popup5a50.js?t=13"></script>
<script type='text/javascript'>
    $(document).ready(function($){
        var timer_close = '0';
        var develop_mode = 0;
        if($.cookie('popup_site') != 'yes' || develop_mode){
            $('#fanback').delay('1000').fadeIn('medium');
            $('#TheBlogWidgets, #fan-exit').click(function(){
                $('#fanback').stop().fadeOut('medium');
            });
            $.cookie('popup_site', 'yes', { path: '/', expires: 7 });
        }
    });
</script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/contact25a50.js?t=13"></script>
<script>
    ( function(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "<?= WEB_ROOT?>/public/client/.<?= WEB_ROOT?>/connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1813595862224723";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/bootstrap.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/bootstrap-hover-dropdown.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/owl.carousel.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/echo.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/jquery.easing-1.3.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/bootstrap-slider.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/jquery.rateit.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/lightbox.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/bootstrap-select.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/wow.min5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/script5a50.js?t=13"></script>
<script src="<?= WEB_ROOT?>/public/client/themes/hotel01/js/scripts5a50.js?t=13"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>-->

<script>
    $(window).resize(function() {
        console.log('resize called');
        var width = $(window).width();
        if (width >= 0 && width <= 767) {
            $('.resize_style').removeClass('wow').addClass('');
        } else {
            $('.resize_style').removeClass('').addClass('wow');
        }
    }).resize();//trigger the resize event on page load.
</script>
<script>
    $(window).resize(function() {
        console.log('resize called');
        var width = $(window).width();
        if (width >= 0 && width <= 767) {
            $('.resize_style').removeClass('fadeInUp').addClass('');
        } else {
            $('.resize_style').removeClass('').addClass('fadeInUp');
        }
    }).resize();//trigger the resize event on page load.
</script>
<script>
    $(document).ready(function () {
        $('form').submit(function () {
            $.LoadingOverlay("show");
        });
    });
    jQuery(document).ready(function() {
        fadeMenuWrap();
        jQuery(window).scroll(fadeMenuWrap);
    });

    function fadeMenuWrap() {
        var scrollPos = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollPos > 300) {
            jQuery('.bttop').fadeIn(300);
        } else {
            jQuery('.bttop').fadeOut(300);
        }
    }
</script>
<script
    src="<?= WEB_ROOT?>/public/client/themes/hotel01/assets/javascripts/jednotka.js"></script>
<script
    src="<?= WEB_ROOT?>/public/client/themes/hotel01/assets/javascripts/plugins/modernizr/modernizr.custom.min.js"></script>

</body>
<!-- SiteModal Required!!! -->
<div id="sitemodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <em class="fa fa-spinner fa-spin">&nbsp;</em>
            </div>
            <button type="button" class="close" data-dismiss="modal">
                <span class="fa fa-times"></span>
            </button>
        </div>
    </div>
</div>
<div class="location_seo" style="display:none !important">
<span class='h-adr'>
<span class='p-street-address'>188/9 Thành Thái </span>,
<span class='p-locality'> P.12, Q.10</span>, <span class='p-country-name'>TP.HCM</span>
- Code: <span class='p-postal-code'>700000</span></span></li>
    <p class='h-geo geo'>
        Tọa Độ:
        <span class='p-latitude latitude'>10.770284</span>,
        <span class='p-longitude longitude'>106.666024</span>
</div>

<div id="timeoutsess" class="chromeframe">
    Bạn đã không sử dụng Site, <a onclick="timeoutsesscancel();" href="#">Bấm vào đây để duy trì trạng thái đăng nhập</a>.
    Thời gian chờ: <span id="secField"> 60 </span> giây
</div>
<div id="openidResult" class="nv-alert" style="display: none"></div>
<div id="openidBt" data-result="" data-redirect=""></div>
</body>

<!-- Mirrored from bookinghotel.mynukeviet.com/vi/users/register/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 14:39:28 GMT -->
</html>