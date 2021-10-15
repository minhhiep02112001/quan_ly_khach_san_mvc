<!-- Content Header (Page header) -->
<?php
if (isset($_SESSION['success'])) {
    extract($_SESSION['success']);
    unset($_SESSION['success']);
}
?>
<section class="content-header">
    <h1>
        Danh sách bài viết
    </h1>
    <ol class="breadcrumb">
        <a href="./admin/article/create" class="btn btn-success btn-sm" style="color: #fff">Thêm bài viết</a>
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
                                <input class="form-control" name="title" placeholder="Tiêu đề  ..." value="<?= $_GET['title'] ??'' ?>" type="text">
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control" name="summary" type="text" value="<?= $_GET['summary'] ??'' ?>" placeholder="Mô tả ngắn ...">
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
                            <th>Tiêu đề</th>
                            <th>Mô tả ngắn</th>
                            <th width="8%">Lượt xem</th>
                            <th width="8%">Nổi bật</th>
                            <th width="8%">Trạng thái</th>
                            <th style="width: 80px; box-sizing: content-box">Hành động</th>
                        </tr>

                        <?php if (count($articles) > 0): ?>
                            <?php foreach ($articles as $key): ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td>
                                        <div class="image"
                                             style="width: 50px; margin: 0 auto ; height: 50px ;border-radius: 5px; overflow: hidden; border: 1px solid">
                                            <img src="<?= $key['image'] ?? './public/admin/img/images.png' ?>" style="width: 100%;height: 100%;" alt="">
                                        </div>
                                    </td>
                                    <td><?= $key['title'] ?></td>
                                    <td><?= $key['summary'] ?></td>
                                    <td class="text-center"><?= $key['view'] ?></td>
                                    <td class="text-center">
                                        <?php if ($key['is_hot']): ?>
                                            <span class="badge bg-green">có</span>
                                        <?php else: ?>
                                            <span class="badge bg-red">không</span>
                                        <?php endif ?>

                                    </td>
                                    <td class="text-center">
                                        <?php if ($key['active']): ?>
                                            <span class="badge bg-green">hiển thị</span>
                                        <?php else: ?>
                                            <span class="badge bg-red">không</span>
                                        <?php endif ?>

                                    </td>
                                    <td>
                                        <a href="./admin/article/edit/<?= $key['id'] ?>"
                                           class="btn btn-xs btn-warning">Sửa</a>
                                        <button type="button" data-id="<?= $key['id'] ?>" data-model="article"
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