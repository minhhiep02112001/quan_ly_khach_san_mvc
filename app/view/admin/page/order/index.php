<!-- Content Header (Page header) -->
<?php
if (isset($_SESSION['success'])) {
    extract($_SESSION['success']);
    unset($_SESSION['success']);
}
?>
<section class="content-header">
    <h1>
        Danh sách phòng
    </h1>
    <ol class="breadcrumb">
        <a href="./admin/room/create" class="btn btn-success btn-sm" style="color: #fff">Thêm phòng</a>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header" style="padding-bottom: 0px;">
                    <h3 class="box-title" style="padding: 10px 0px 0px 10px">Tìm kiếm : </h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                    <form action="" type="get">
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <input class="form-control" name="name" placeholder="Họ tên ..."
                                       value="<?= $_GET['name'] ?? '' ?>" type="text">
                            </div>
                            <div class="col-xs-3">
                                <input class="form-control" name="email" type="text" value="<?= $_GET['email'] ?? '' ?>"
                                       placeholder="Email ...">
                            </div>
                            <div class="col-xs-3">
                                <input class="form-control" name="phone" type="text" value="<?= $_GET['phone'] ?? '' ?>"
                                       placeholder="Phone ...">
                            </div>
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                    <div class="status">
                        <?php if (isset($status)): ?>

                            <div class="alert alert-success alert-dismissable" style="margin:10px 0px;">
                                <i class="fa fa-check"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b><?= $status ?></b>
                            </div>

                        <?php endif; ?>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 10%;">Mã code</th>
                            <th class="text-center">Trạng thái</th>
                            <th>Tên người thuê</th>
                            <th>Email</th>
                            <th width="10%">Số điện thoại</th>
                            <th width="10%" class="text-center">Giá tiền</th>
                            <th width="10%" class="text-center">Ngày bắt đầu</th>
                            <th width="10%" class="text-center">Ngày kết thúc</th>

                            <th width="8%">Hành động</th>
                        </tr>

                        <?php if (count($orders) > 0) : ?>
                            <?php foreach ($orders as $key => $item): ?>
                                <tr>
                                    <td> <?= ++$start?></td>
                                    <td>
                                        <?= $item['code']?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($item['status'] == 0): ?>
                                        <span class="btn btn-flat"
                                              style="padding: 5px 10px; background: #e08e0b; color: #fff"><?= getOrderStatus($item['status'])?></span>
                                        <?php elseif($item['status'] == 1): ?>
                                        <span class=" btn-flat"
                                              style="padding: 5px 10px; background: #00acd6;color: #fff; "><?= getOrderStatus($item['status'])?></span>
                                        <?php elseif($item['status'] == 2): ?>
                                        <span class="btn  btn-flat"
                                              style="padding: 5px 10px; background: #008d4c;color: #fff; "><?= getOrderStatus($item['status'])?></span>
                                        <?php elseif($item['status'] == 3): ?>
                                        <span class="btn btn-flat"
                                              style="padding: 5px 10px; background: #f4543c;color: #fff; "><?= getOrderStatus($item['status'])?></span>
                                        <?php else: ?>
                                        <span class="btn btn-flat"
                                              style="padding: 5px 10px; background: #f4543c; color: #fff;"><?= getOrderStatus($item['status'])?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= $item['phone'] ?></td>
                                    <td class="text-center"><?= number_format($item['total'] , 0 ,',' ,'.')?> đ</td>
                                    <td class="text-center"><?= date("d-m-Y", strtotime( $item['start'] )) ?></td>
                                    <td class="text-center"><?= date("d-m-Y", strtotime( $item['end'] )) ?></td>
                                    <td class="text-center">
                                        <a href="./admin/order/show/<?= $item['id'] ?>" class="btn btn-info">chi
                                            tiết</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="10">
                                    <p class="text-center">Không tồn tại bản ghi nào</p>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?= $paginate->getPagination() ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->