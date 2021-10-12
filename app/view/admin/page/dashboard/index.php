
<!-- Main content -->
<section class="content">
    <h4 class="page-header">
        Thống kê
    </h4>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>
                        <?=$data['countOrder']?>
                    </h3>
                    <p>
                        Đặt phòng
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios7-cart-outline"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                        <?=$data['countOrderSuccess']?>
                    </h3>
                    <p>
                        Đặt phòng thành công
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios7-cart"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>
                        <?=$data['countOrderPaid']?>
                    </h3>
                    <p>
                        Đã thanh toán
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        <?=$data['countOrderCancel']?>
                    </h3>
                    <p>
                        Đã hủy đặt phòng
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>
                        <?=$data['countUser']?>
                    </h3>
                    <p>
                        Khách hàng
                    </p>
                </div>
                <div class="icon">
                    <i class=" ion ion-person-add"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>
                        <?=$data['countCustomer']?>
                    </h3>
                    <p>
                        Nhân viên
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>
                        <?=$data['countRoom']?>
                    </h3>
                    <p>
                        Phòng
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>
                        <?=$data['countArticle']?>
                    </h3>
                    <p>
                        Bài viết
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios7-bookmarks-outline"></i>
                </div>
                <a href="javascript:void(0)" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Box (with bar chart) -->
            <div class="box box-danger" id="loading-example">
                <div class="box-header">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    <!-- Date and time range -->
                        <div class="input-group">
                            <button class="btn btn-default pull-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i> Date range picker
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </div><!-- /. tools -->
                    <i class="fa fa-cloud"></i>

                    <h3 class="box-title">Server Load</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div><!-- /.row - inside box -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">

                    </div><!-- /.row -->
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </section><!-- /.Left col -->
    </div>
<!-- -->
</section><!-- /.content -->