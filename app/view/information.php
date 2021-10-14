<!DOCTYPE html>
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


<html lang="vi" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/html">


<!-- Mirrored from bookinghotel.mynukeviet.com/vi/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 14:39:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <base href="<?= WEB_ROOT ?>">
    <title></title>
    <meta name="description"
          content="Liên hệ - Liên hệ - http&#x3A;&#x002F;&#x002F;bookinghotel.mynukeviet.com&#x002F;vi&#x002F;contact&#x002F;"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="author" content="ATR Hotel"/>
    <meta name="copyright" content="ATR Hotel [tdfoss@contact.vn]"/>
    <meta name="robots" content="index, archive, follow, noodp"/>
    <meta name="googlebot" content="index,archive,follow,noodp"/>
    <meta name="msnbot" content="all,index,follow"/>
    <meta name="generator" content="NukeViet v4.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="Liên hệ"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Liên hệ - Liên hệ - http&#x3A;&#x002F;&#x002F;bookinghotel.mynukeviet.com&#x002F;vi&#x002F;contact&#x002F;"/>
    <meta property="og:site_name" content="ATR Hotel"/>
    <meta property="og:url" content="index.html"/>
    <link rel="shortcut icon" href="./public/client/uploads/logo-xs.png">
    <link rel="canonical" href="index.html">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="StyleSheet" href="./public/client/assets/css/font-awesome.min5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/bootstrap.min5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/simple-line-icons5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/owl.carousel5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/owl.transitions5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/rateit5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/bootstrap-select.min5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/global_category5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/main5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/blue5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/assets/stylesheets/jednotka_green5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/style5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/menu_mobile_news105a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/style_15a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/style.responsive5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/contact5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/hotel01/css/users5a50.css?t=13">
    <link rel="StyleSheet" href="./public/client/themes/default/css/popup5a50.css?t=13">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>

    <ion-content padding>
        <ion-refresher (ionRefresh)="doRefresh($event)">
            <ion-refresher-content></ion-refresher-content>
        </ion-refresher>
        <ion-card *ngFor="let ticket of currentTickets">
            <ion-card-header></ion-card-header>
            <ion-card-content>

                <div></div>

            </ion-card-content>
        </ion-card>
    </ion-content>
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
    <div class="alert alert-danger">Trình duyệt của bạn đã tắt chức năng hỗ trợ JavaScript.<br/>Website chỉ làm việc khi
        bạn bật nó trở lại.<br/>Để tham khảo cách bật JavaScript, hãy click chuột <a
                href="http://wiki.nukeviet.vn/support:browser:enable_javascript">vào đây</a>!
    </div>
</noscript>
<body class="cnt-home">
<?php include_once 'layout/_header.php' ?>
<div class="body-content maincontent">
    <div class="breadcrumb">
        <div class="breadcrumb-inner">
            <div class="img_detail_page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <ul class="list-inline list-unstyled text-center">
                                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                            href="index.html" itemprop="url"
                                            title="Liên hệ"><span class="txt"
                                                                  itemprop="title">Liên hệ</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <?php if(isset($status)):?>
                <p style="padding: 7px 5px ; border-radius: 5px; ; background: #33c319; color: black"><?=$status?></p>
            <?php endif;?>
            <div class="col-md-24" style="padding: 0">
                <div class="page">

                    <div class="row">
                        <div class="col-sm-12 col-md-16">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>Thông tin đặt hàng</h3>
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên Phòng</th>
                                            <th>Ngày đến</th>
                                            <th>Ngày đi</th>
                                            <th>Số người</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($orders as $key=>$item):?>
                                                <tr style="font-size: 13px;">
                                                    <td><?= $item['code'] ?></td>
                                                    <td ><?= $item['title'] ?></td>
                                                    <td><?= date("d-m-Y", strtotime( $item['start'] )) ?></td>
                                                    <td><?= date("d-m-Y", strtotime( $item['end'] )) ?></td>
                                                    <td style="text-align: center"><?= $item['count_people']?></td>
                                                    <td style="text-align: center;">
                                                        <?php if ($item['status'] == 0): ?>
                                                            <span class="btn btn-flat"
                                                                  style="padding: 5px 2px; background: #e08e0b; color: #fff; font-size:11px;"><?= getOrderStatus($item['status'])?></span>
                                                        <?php elseif($item['status'] == 1): ?>
                                                            <span class="btn btn-flat"
                                                                  style="padding: 5px 2px; background: #00acd6;color: #fff; font-size:11px; "><?= getOrderStatus($item['status'])?></span>
                                                        <?php elseif($item['status'] == 2): ?>
                                                            <span class="btn  btn-flat"
                                                                  style="padding: 5px 2px; background: #008d4c;color: #fff; font-size:11px; "><?= getOrderStatus($item['status'])?></span>
                                                        <?php elseif($item['status'] == 3): ?>
                                                            <span class="btn btn-flat"
                                                                  style="padding: 5px 2px; background: #f4543c;color: #fff; font-size:11px; "><?= getOrderStatus($item['status'])?></span>
                                                        <?php else: ?>
                                                            <span class="btn btn-flat"
                                                                  style="padding: 5px 2px; background: #f4543c; color: #fff; font-size:11px;"><?= getOrderStatus($item['status'])?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <?php if(in_array($item['status'] , [0,1])): ?>
                                                            <button class="btn btn-primary btn-cancel-order" style="font-size: 11px;padding: 5px 8px;  height: 35px;" data-id="<?= $item['id']?>">Hủy</button>
                                                        <?php endif;?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên Phòng</th>
                                            <th>Ngày đến</th>
                                            <th>Ngày đi</th>
                                            <th>Số người</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Lý do hủy đơn : </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post" id="form-update-order">
                                                        <div class="form-group">
                                                            <div>
                                                                <textarea class="form-control  input" placeholder="Lý do ...." name="content" rows="5" ></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="btn-update-order" class="btn btn-primary" style="height: 30px; padding: 4px 8px; font-size: 11px;"  >Gửi</button>
                                                    <button type="button" class="btn btn-default" style="height: 30px; padding: 4px 8px; font-size: 11px;" data-dismiss="modal">Hủy</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thay đổi thông tin</div>
                                <div class="panel-body loadContactForm">
                                    <div class="lien-he">
                                        <form method="post" action="./information/update" >
                                            <?php if(isset($error)):?>
                                                <div class="error">
                                                    <ul style="margin-bottom: 10px;">
                                                        <?php foreach($error as $val): ?>
                                                            <li class="text-danger"> <?= $val ?> </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>

                                            <?php endif;?>

                                            <div class="form-group clearfix">
                                                <p>Họ và tên:</p>
                                                <div class="input-group">
                                                    <input type="text" maxlength="100" value="<?= $_SESSION['user.login']['name']?>" name="name"
                                                           class="form-control required" placeholder="Họ và tên" />
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <p>Email:</p>
                                                <div class="input-group">
                                                    <input type="email" maxlength="60" value="<?= $_SESSION['user.login']['email']?>" name="email"
                                                           class="form-control required" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <p>Số điện thoại:</p>
                                                <div class="input-group">
                                                    <input type="text" maxlength="60" value="<?= $_SESSION['user.login']['phone']?>" name="phone"
                                                           class="form-control" placeholder="Điện thoại"/>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <p>Mật khẩu:</p>
                                                <div class="input-group">
                                                    <input type="password" maxlength="60" value="" name="password"
                                                           class="form-control" placeholder="Mật Khẩu"/>
                                                </div>
                                            </div>
                                            <div class="text-center form-group">

                                                <button type="submit"  class="ok-ok"/>Cập nhật </button>
                                            </div>
                                        </form>
                                        <div class="contact-result alert"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
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
                <div class="col-md-16 col-sm-24 offset-4"></div>
            </div>
        </div>
    </div>
    <div class="logo_footer">
        <div class="row">
            <div class="col-xs-24 col-md-24 col-sm-24 no-padding">
                <img class="social" src="./public/client/uploads/logo_1.png" width="186" height="44" alt="ATR Hotel"/>
                <!-- <h3 class="visible-xs-inline-block">Chúng tôi trên mạng xã hội</h3> -->
                <div class="social-media">
                    <a href="https://www.facebook.com/nukeviet" target="_blank"><i class="fa fa-facebook fb"></i></a>
                    <a href="https://www.google.com/+nukeviet" target="_blank"><i class="fa fa-google-plus gp"></i></a>
                    <a href="https://www.youtube.com/user/nukeviet" target="_blank"><i class="fa fa-youtube yt"></i></a>
                    <a href="https://twitter.com/nukeviet" target="_blank"><i class="fa fa-twitter tt"></i></a>
                    <a href="../feeds/index.html"><i class="fa fa-rss rs"></i></a>
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
                            <li><a href="../about/index.html" title="Giới thiệu">Giới thiệu</a></li>
                            <li><a href="../news/index.html" title="Tin Tức">Tin Tức</a></li>
                            <li><a href="../hop-dap/index.html" title="Hỏi đáp">Hỏi đáp</a></li>
                            <li><a href="index.html" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-12 col-md-6 panel-body menu_footer2">
                    <div class="module-heading">
                        <h4 class="module-title">HD đặt phòng thanh toán</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled superfish'>
                            <li><a href="../guide-tourist/huong-dan-thanh-toan.html" title="Hướng dẫn thanh toán">Hướng
                                    dẫn thanh toán</a></li>
                            <li><a href="../guide-tourist/huong-dan-dat-phong.html" title="Hướng dẫn đặt phòng">Hướng
                                    dẫn đặt phòng</a></li>
                            <li><a href="../guide-tourist/index.html" title="Hướng dẫn đặt phòng trực tuyến">Hướng dẫn
                                    đặt phòng trực tuyến</a></li>
                            <li><a href="../guide-tourist/huong-dan-tim-kiem-can-ho.html"
                                   title="Hướng dẫn tìm kiếm căn hộ">Hướng dẫn tìm kiếm căn hộ</a></li>
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
                                 data-show-facepile="false">
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
                <label for="LoginControl"><a href="#" class="OverlayTrigger concealed noOutline">Thành viên đăng
                        nhập</a></label>
            </h3>
            <form action="http://bookinghotel.mynukeviet.com/vi/users/login/" method="post"
                  onsubmit="return login_validForm(this);" autocomplete="off" novalidate>
                <div class="nv-info margin-bottom"
                     data-default="Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên site">Hãy đăng nhập
                    thành viên để trải nghiệm đầy đủ các tiện ích trên site
                </div>
                <div class="form-detail">
                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-user fa-lg"></em></span>
                            <input type="text" class="required form-control" placeholder="Tên đăng nhập hoặc email"
                                   value="" name="nv_login" maxlength="100" data-pattern="/^(.){3,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Tên đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="password" autocomplete="off" class="required form-control"
                                   placeholder="Mật khẩu" value="" name="nv_password" maxlength="100"
                                   data-pattern="/^(.){3,}$/" onkeypress="validErrorHidden(this);"
                                   data-mess="Mật khẩu đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep2 hidden">
                        <label class="margin-bottom">Nhập mã xác minh từ ứng dụng Google Authenticator</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 6 chữ số" value=""
                                   name="nv_totppin" maxlength="6" data-pattern="/^(.){6,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Nhập mã 6 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>

                    <div class="form-group loginstep3 hidden">
                        <label class="margin-bottom">Nhập một trong các mã dự phòng bạn đã nhận được.</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 8 chữ số" value=""
                                   name="nv_backupcodepin" maxlength="8" data-pattern="/^(.){8,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Nhập mã 8 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>
                    <div class="text-center margin-bottom-lg">
                        <input type="button" value="Thiết lập lại" class="btn btn-default"
                               onclick="validReset(this.form);return!1;"/>
                        <button class="bsubmit btn btn-primary" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="guestLogin_nv24" class="hidden">
    <div class="page panel panel-default bg-lavender box-shadow">
        <div class="panel-body">
            <h3 id="loginBarHandle" class="h3_login">
                <label for="LoginControl"><a href="#" class="OverlayTrigger concealed noOutline">Thành viên đăng
                        nhập</a></label>
            </h3>
            <form action="http://bookinghotel.mynukeviet.com/vi/users/login/" method="post"
                  onsubmit="return login_validForm(this);" autocomplete="off" novalidate>
                <div class="nv-info margin-bottom"
                     data-default="Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên site">Hãy đăng nhập
                    thành viên để trải nghiệm đầy đủ các tiện ích trên site
                </div>
                <div class="form-detail">
                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-user fa-lg"></em></span>
                            <input type="text" class="required form-control" placeholder="Tên đăng nhập hoặc email"
                                   value="" name="nv_login" maxlength="100" data-pattern="/^(.){3,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Tên đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep1">
                        <div class="input-group">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="password" autocomplete="off" class="required form-control"
                                   placeholder="Mật khẩu" value="" name="nv_password" maxlength="100"
                                   data-pattern="/^(.){3,}$/" onkeypress="validErrorHidden(this);"
                                   data-mess="Mật khẩu đăng nhập chưa được khai báo">
                        </div>
                    </div>

                    <div class="form-group loginstep2 hidden">
                        <label class="margin-bottom">Nhập mã xác minh từ ứng dụng Google Authenticator</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 6 chữ số" value=""
                                   name="nv_totppin" maxlength="6" data-pattern="/^(.){6,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Nhập mã 6 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>

                    <div class="form-group loginstep3 hidden">
                        <label class="margin-bottom">Nhập một trong các mã dự phòng bạn đã nhận được.</label>
                        <div class="input-group margin-bottom">
                            <span class="input-group-addon"><em class="fa fa-key fa-lg fa-fix"></em></span>
                            <input type="text" class="required form-control" placeholder="Nhập mã 8 chữ số" value=""
                                   name="nv_backupcodepin" maxlength="8" data-pattern="/^(.){8,}$/"
                                   onkeypress="validErrorHidden(this);" data-mess="Nhập mã 8 chữ số">
                        </div>
                        <div class="text-center">
                            <a href="#" onclick="login2step_change(this);">Thử cách khác</a>
                        </div>
                    </div>
                    <div class="text-center margin-bottom-lg">
                        <input type="button" value="Thiết lập lại" class="btn btn-default"
                               onclick="validReset(this.form);return!1;"/>
                        <button class="bsubmit btn btn-primary" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="./public/client/assets/js/jquery/jquery.min5a50.js?t=13"></script>

<script>var nv_base_siteurl = "http://bookinghotel.mynukeviet.com/", nv_lang_data = "vi", nv_lang_interface = "vi",
        nv_name_variable = "nv", nv_fc_variable = "op", nv_lang_variable = "language", nv_module_name = "contact",
        nv_func_name = "main", nv_is_user = 0, nv_my_ofs = 7, nv_my_abbr = "+07", nv_cookie_prefix = "nv4",
        nv_check_pass_mstime = 1738000, nv_area_admin = 0, nv_safemode = 0, theme_responsive = 1,
        nv_is_recaptcha = 0;</script>
<script src="./public/client/assets/js/language/vi5a50.js?t=13"></script>
<script src="./public/client/assets/js/global5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/contact5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/main5a50.js?t=13"></script>
<script type="text/javascript" src="./public/client/themes/hotel01/js/users5a50.js?t=13"></script>
<script type="text/javascript" data-show="after">
    $(function () {
        checkWidthMenu();
        $(window).resize(checkWidthMenu);
    });
</script>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".header-area").addClass("sticky");
        } else {
            $(".header-area").removeClass("sticky");
        }
    });
</script>
<script type="text/javascript" src="./public/client/themes/default/js/popup5a50.js?t=13"></script>

<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyC8ODAzZ75hsAufVBSffnwvKfTOT6TnnNQ"></script>
<script>
    var ele = 'company-map-293';
    var map, marker, ca, cf, a, f, z;
    ca = parseFloat($('#' + ele).data('clat'));
    cf = parseFloat($('#' + ele).data('clng'));
    a = parseFloat($('#' + ele).data('lat'));
    f = parseFloat($('#' + ele).data('lng'));
    z = parseInt($('#' + ele).data('zoom'));
    map = new google.maps.Map(document.getElementById(ele), {
        zoom: z,
        center: {
            lat: ca,
            lng: cf
        }
    });
    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(a, f),
        draggable: false,
        animation: google.maps.Animation.DROP
    });
</script>
<!-- <script>
    ( function(d, s, id) {
        var js,
        fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "./public/client/../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1813595862224723";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script> -->
<script src="./public/client/themes/hotel01/js/bootstrap.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/bootstrap-hover-dropdown.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/owl.carousel.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/echo.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/jquery.easing-1.3.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/bootstrap-slider.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/jquery.rateit.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/lightbox.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/bootstrap-select.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/wow.min5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/script5a50.js?t=13"></script>
<script src="./public/client/themes/hotel01/js/scripts5a50.js?t=13"></script>
<script>
    $(window).resize(function () {
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
    $(window).resize(function () {
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
    jQuery(document).ready(function () {
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
        src="./public/client/themes/hotel01/assets/javascripts/jednotka.js"></script>
<script
        src="./public/client/themes/hotel01/assets/javascripts/plugins/modernizr/modernizr.custom.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).on('click' , '.btn-cancel-order',function (){
       var id = $(this).data('id');

       $('#myModal').find('form').attr('action' ,'information/update-order-'+ id);
       $('#myModal').modal();
    });
    $('#btn-update-order').click(function (){

        $("#form-update-order").submit();
    });

    $(document).ready(function () {
        // Setup - add a text input to each footer cell
        // $('#example tfoot th').each( function () {
        //     var title = $(this).text();
        //     $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        // } );

        // DataTable
        var table = $('#example').DataTable({});

    });
</script>
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
    Bạn đã không sử dụng Site, <a onclick="timeoutsesscancel();" href="#">Bấm vào đây để duy trì trạng thái đăng
        nhập</a>.
    Thời gian chờ: <span id="secField"> 60 </span> giây
</div>
<div id="openidResult" class="nv-alert" style="display: none"></div>
<div id="openidBt" data-result="" data-redirect=""></div>
</body>

<!-- Mirrored from bookinghotel.mynukeviet.com/vi/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 14:39:28 GMT -->
</html>