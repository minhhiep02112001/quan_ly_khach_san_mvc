<section class="content-header">
    <h1>
        Đặt phòng
    </h1>
    <ol class="breadcrumb">
        <a href="/admin/order" class="btn btn-success btn-sm" style="color: #fff">Danh sách đặt phòng</a>
    </ol>
</section>
<!-- Main content -->
<?php
if (isset($_SESSION['validate_data'])) {
    extract($_SESSION['validate_data']);
    unset($_SESSION['validate_data']);
}
?>


<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger alert-dismissable" style="margin-right: 12px; margin-top: 15px;">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error !</b>
                        <ul style="padding-left: 20px;">
                            <?php foreach ($error as $val): ?>
                                <li> <?= $val ?> </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- form start -->
                <form role="form" action="/admin/order/store" method="post" id="form-booked-room-admin" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Chọn phòng :</label>
                            <select class="form-control" id="select_room" name="room_id">
                                <?php foreach ($rooms as $key => $item): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['title'] ?> . ( Giá
                                        : <?= number_format($item['price'], 0, ',', '.') ?> đ/ngày
                                        ; <?= $item['count_people'] ?> người)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label>
                                <input type="checkbox" class="check-user-outside"
                                       name="check_user" <?= isset($old['check_user']) ? 'checked' : '' ?>> Khách ngoài
                            </label>
                        </div>

                        <div class="form-group select-user">
                            <label>Chọn khách hàng : </label>
                            <select class="form-control" id="select_customer" name="user_id">
                                <?php foreach ($users as $key => $item): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?>
                                        - <?= $item['email'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-create-user-outside">
                            <div class="form-group">
                                <label>Họ tên : </label>
                                <input type="text" class="form-control" name="name" value="<?= $old['name'] ?? '' ?>"
                                       placeholder="Họ tên ...">
                            </div>
                            <div class="form-group">
                                <label>Email : </label>
                                <input type="text" class="form-control" name="email" value="<?= $old['email'] ?? '' ?>" placeholder="Email ...">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại : </label>
                                <input type="text" class="form-control" name="phone" value="<?= $old['phone'] ?? '' ?>" placeholder="Số điện thoại ...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Date range:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" value="<?= $old['start_end'] ?? ''?>" id="reservation" name="start_end" readonly/>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->

                        <div class="form-group">
                            <label>Số người ở :</label>
                            <input type="number" name="count_people" min="1" value="<?= $old['count_people'] ?? '1' ?>" class="form-control" placeholder="Enter ...">
                        </div>

                        <div class="form-group">
                            <label>Ghi chú : </label>
                            <textarea class="form-control" rows="3" name="contents" placeholder="Ghi chú."><?= $old['contents'] ?? ''?></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->

</section>