<!-- Main content -->
<section class="content invoice" style="width: 90%; padding: 0 10%;">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> Thông tin đơn đặt phòng
                <small class="pull-right">Date: <?= date('d-m-Y', strtotime($order['created_at'])) ?></small>
            </h2>
        </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-xs-12 col-sm-12 invoice-col">
            <p><b>Mã code </b> : <?= $order['code'] ?></p>
            <p><b>Họ tên </b> : <?= $order['name'] ?></p>
            <p><b>Số điện thoại </b> : <?= $order['phone'] ?></p>
            <p><b>Email </b> : <?= $order['email'] ?></p>
            <p><b>Ngày nhận </b> : <?= date('d-m-Y', strtotime($order['start'])) ?></p>
            <p><b>Ngày trả </b> : <?= date('d-m-Y', strtotime($order['end'])) ?></p>
            <p><b>Tổng số ngày ở </b> : <?= $order['sum_day'] ?></p>

            <p><b>Trạng thái </b> :
                <?php if ($order['status'] == 0): ?>
                    <span class="btn btn-flat"
                          style="padding: 0px 10px; background: #e08e0b; color: #fff"><?= getOrderStatus($order['status']) ?></span>
                <?php elseif ($order['status'] == 1): ?>
                    <span class=" btn-flat"
                          style="padding: 0px 10px; background: #00acd6;color: #fff; "><?= getOrderStatus($order['status']) ?></span>
                <?php elseif ($order['status'] == 2): ?>
                    <span class="btn  btn-flat"
                          style="padding: 0px 10px; background: #008d4c;color: #fff; "><?= getOrderStatus($order['status']) ?></span>
                <?php elseif ($order['status'] == 3): ?>
                    <span class="btn btn-flat"
                          style="padding: 0px 10px; background: #f4543c;color: #fff; "><?= getOrderStatus($order['status']) ?></span>
                <?php else: ?>
                    <span class="btn btn-flat"
                          style="padding: 0px 10px; background: #f4543c; color: #fff;"><?= getOrderStatus($order['status']) ?></span>
                <?php endif; ?>
            </p>
            <?php if ($order['status'] == 2): ?>
                <p><b>Phương thức thanh toán</b> : <?= $order['payment'] ? "Thanh toán online" : "Tiền mặt" ?></p>
            <?php endif; ?>
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
                        <td class="text-center"><?= number_format($item['price'] * $order['sum_day'], 0, ',', '.') ?>
                            đ
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">

        <!-- accepted payments column -->
        <div class="col-xs-12">
            <p class="lead text-right">Thanh toán : <?= number_format($order['total'], 0, ',', '.') ?> đ</p>
        </div><!-- /.col -->

    </div><!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <?php if ($order['status'] >= 3): ?>
            <div class="col-xs-12">
                <div class="alert alert-warning alert-dismissable">
                    <i class="fa fa-warning"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Lý do hủy : </b> <?= $order['contents'] ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-xs-12" style="margin-bottom: 10px;">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
            <a class="btn btn-success pull-right" style="margin-left: 5px;" href="./admin/order"> Quay lại</a>
            <?php if ($order['status'] != 2): ?>
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i
                            class="fa fa-credit-card"></i> Cập nhật trạng thái
                </button>
            <?php endif; ?>
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
                        <form action="admin/order/update/<?= $order['id'] ?>" id="form-update-status" method="post">

                            <div class="form-group">
                                <label>Trạng thái đơn : </label>
                                <select class="form-control" id="select-status-order" name="status">
                                    <option value="0" <?= $order['status'] == 0 ? 'selected' : "" ?>><?= getOrderStatus(0) ?></option>
                                    <option value="1" <?= $order['status'] == 1 ? 'selected' : "" ?>><?= getOrderStatus(1) ?></option>
                                    <option value="2" <?= $order['status'] == 2 ? 'selected' : "" ?>><?= getOrderStatus(2) ?></option>
                                    <option value="3" <?= $order['status'] == 3 ? 'selected' : "" ?>
                                            class="cancel-order"><?= getOrderStatus(3) ?></option>
                                    <option value="4" <?= $order['status'] == 4 ? 'selected' : "" ?>
                                            class="cancel-order"><?= getOrderStatus(4) ?></option>
                                </select>
                            </div>
                            <div class="form-group reason-cancel-order">
                                <label>Lý do : </label>
                                <textarea class="form-control" rows="3" required name="content"
                                          placeholder="Lý do ...."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-update-form-status">Cập nhật</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section><!-- /.content -->






