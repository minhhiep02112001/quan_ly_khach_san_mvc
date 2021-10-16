<section class="content-header">
    <h1>
        Thông tin cá nhân :
    </h1>
</section>
<!-- Main content -->
<?php
if(isset($_SESSION['validate_data'])){
    extract($_SESSION['validate_data']);
    unset($_SESSION['validate_data']);
}
?>
<?php
if (isset($_SESSION['success'])) {
    extract($_SESSION['success']);
    unset($_SESSION['success']);
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

                <?php if (isset($status)): ?>

                    <div class="alert alert-success alert-dismissable" style="margin:10px 0px;">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b><?= $status ?></b>
                    </div>

                <?php endif; ?>
                <!-- form start -->
                <form role="form" action="/admin/information/edit" method="post" enctype="multipart/form-data">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ và tên :</label>
                            <input type="text" class="form-control" name="name" value="<?=$old['name'] ?? $_SESSION['admin.login']['name'] ?? ''?>"
                                   id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email :</label>
                            <input type="email" disabled class="form-control" name="email" value="<?= $old['email'] ?? $_SESSION['admin.login']['email'] ?? '' ?>"
                                   id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại :</label>
                            <input type="number" class="form-control" name="phone" value="<?=$old['phone'] ??  $_SESSION['admin.login']['phone'] ?? ''?>"
                                   id="exampleInputEmail1" placeholder="Enter phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" name="image" id="file-image-upload">
                            <div class="content-image-upload" style="overflow:hidden ;width: 70px ; height: 70px;border-radius: 5px ; border: 1px solid; margin-top: 10px;">
                                <img id="image-upload" src="<?= $_SESSION['admin.login']['image'] ?? ''?>" width="100%" height="100%"  alt="">
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div><!-- /.box -->


        </div>
    </div><!-- /.row -->

</section>