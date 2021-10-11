<!-- Main content -->
<section class="content invoice" style="width: 90%; padding: 0 15%;">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> Thông tin đơn đặt phòng
                <small class="pull-right">Date: 2/10/2014</small>
            </h2>
        </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <p><b>Mã code </b> : <?= $order['code'] ?></p>
            <p><b>Họ tên </b> : <?= $order['name'] ?></p>
            <p><b>Số điện thoại </b> : <?= $order['phone'] ?></p>
            <p><b>Email </b> : <?= $order['email'] ?></p>
            <p><b>Trạng thái </b> : </p>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <h3 class="text-center" style="margin-top: 0px;">Thông tin phòng đặt</h3>
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tên phòng</th>
                    <th width="90px">Hình ảnh</th>
                    <th class="text-center" width="15%">Giá / ngày</th>
                    <th class="text-center" width="15%">Số người ở</th>
                    <th class="text-center" width="15%">Tổng tiền</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($order_details as $item): ?>
                    <tr>
                        <td><?= $item['title'] ?></td>
                        <td>
                            <div class="image" style="width: 80px; height: 70px; border-radius: 5px; border: 1px solid">
                                <img src="<?= $item['image'] ?>" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </td>
                        <td class="text-center"><?= number_format($item['room_price'], 0, ',', '.') ?> đ</td>
                        <td class="text-center"><?= $item['order_people'] ?></td>
                        <td class="text-center"><?= number_format($item['price'], 0, ',', '.') ?> đ</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">

        <!-- accepted payments column -->
        <div class="col-xs-12">
            <p class="lead text-right">Thanh toán : <?= $order['total']?> đ</p>
        </div><!-- /.col -->

    </div><!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            <div class="alert alert-warning alert-dismissable">
                <i class="fa fa-warning"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Lý do hủy : </b> <?= $order['contents']?>
            </div>
        </div>
        <div class="col-xs-12" style="margin-bottom: 10px;">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
            <a class="btn btn-success pull-right" style="margin-left: 5px;" href="./admin/order"> Quay lại</a>
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-credit-card"></i> Cập nhật trạng thái</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật trạng thái đơn hàng </h4>
                    </div>
                    <div class="modal-body">
                        <form action="admin/order/update/<?=$order['id']?>" id="form-update-status" method="post">

                            <div class="form-group">
                                <label>Trạng thái đơn : </label>
                                <select class="form-control" id="select-status-order" name="status">
                                    <option value="0"  <?= $order['status'] == 0 ? 'selected':"" ?>>Đặt hàng</option>
                                    <option value="1"  <?= $order['status'] == 1 ? 'selected':"" ?>>Thành công</option>
                                    <option value="2"  <?= $order['status'] == 2 ? 'selected':"" ?>>Thanh toán</option>
                                    <option value="3"  <?= $order['status'] == 3 ? 'selected':"" ?> class="cancel-order">Hủy</option>
                                    <option value="4"  <?= $order['status'] == 4 ? 'selected':"" ?> class="cancel-order">Khách hàng hủy</option>
                                </select>
                            </div>
                            <div class="form-group reason-cancel-order">
                                <label>Lý do : </label>
                                <textarea class="form-control" rows="3" required name="content" placeholder="Lý do ...."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-update-form-status"  >Cập nhật</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section><!-- /.content -->






