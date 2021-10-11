<section class="content-header">
    <h1>
        Thêm mới bài viết
    </h1>
    <ol class="breadcrumb">
        <a href="/admin/article" class="btn btn-success btn-sm" style="color: #fff">Danh sách bài viết</a>
    </ol>
</section>
<!-- Main content -->
<?php
    if(isset($_SESSION['validate_data'])){
    extract($_SESSION['validate_data']);
    unset($_SESSION['validate_data']);
    }
?>


<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <?php if(isset($error)):?>
                <div class="alert alert-danger alert-dismissable" style="margin-right: 12px; margin-top: 15px;">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Error !</b>
                    <ul style="padding-left: 20px;">
                        <?php foreach($error as $val): ?>
                        <li> <?= $val ?> </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif;?>
                <!-- form start -->
                <form role="form" action="/admin/article/store" method="post" enctype="multipart/form-data">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề :</label>
                            <input type="text" class="form-control" name="title" value="<?= $old['title']??''?>"
                                   id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả ngắn :</label>
                            <textarea class="form-control" name="summary" id="summary" rows="6">
                                    <?= $old['summary']??''?>
                                </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả chi tiết :</label>
                            <textarea class="form-control" name="details_description" id="details_description">
                                    <?= $old['details_description']??''?>
                                </textarea>

                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="is_hot"
                                       value="1" <?= isset($old['is_hot']) ? 'checked' : ''?>> Nổi bật
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="active"
                                       value="1" <?= isset($old['active']) ? 'checked' : ''?>> Hiển thị
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->


        </div>
    </div><!-- /.row -->

</section>