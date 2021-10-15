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
                                <input class="form-control" name="title" placeholder="Tên phòng ..." value="<?= $_GET['title'] ??'' ?>" type="text">
                            </div>
                            <div class="col-xs-3">
                                <input class="form-control" name="summary" type="text" value="<?= $_GET['summary'] ??'' ?>" placeholder="Mô tả ngắn ...">
                            </div>
                            <div class="col-xs-3">
                                <input class="form-control" name="count_people" type="text" value="<?= $_GET['count_people'] ??'' ?>" placeholder="Số người ...">
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
                            <th style="width: 80px;">Hình ảnh</th>
                            <th>Tên phòng</th>
                            <th width="10%" class="text-center">Giá / ngày</th>
                            <th >Mô tả ngắn</th>
                            <th width="8%">Số người</th>
                            <th width="8%">Trạng thái</th>
                            <th style="width: 80px; box-sizing: content-box">Hành động</th>
                        </tr>

                        <?php if (count($rooms) > 0): ?>
                            <?php foreach ($rooms as $item): ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td>
                                        <div class="image" style="margin:0 auto;width: 70px ; height: 50px; overflow:hidden; border: 1px solid ; border-radius: 5px;">
                                            <img style="width: 100%; height: 100%;" src="<?= $item['image'] ?? './public/admin/img/images.png'?>">
                                        </div>
                                    </td>
                                    <td><?= $item['title']?></td>
                                    <td class="text-center">
                                        <?=  number_format($item['price'] , 0 , ',' , '.') ?> đ
                                    </td>
                                    <td class=""><?= $item['summary']?> </td>
                                    <td class="text-center"><?= $item['count_people']?></td>

                                    <td>
                                        <?php if ($item['active']): ?>
                                            <span class="badge bg-green">kích hoạt</span>
                                        <?php else: ?>
                                            <span class="badge bg-red">khóa</span>
                                        <?php endif ?>

                                    </td>
                                    <td>
                                        <a href="./admin/room/edit/<?= $item['id'] ?>"
                                           class="btn btn-xs btn-warning">Sửa</a>
                                        <button type="button" data-id="<?= $item['id'] ?>" data-model="room"
                                                class="btn btn-xs btn-danger btn-delete-record">Xóa</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td class="text-center" colspan="7">Không tồn tại bản ghi nào !!!</td>
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