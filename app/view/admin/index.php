<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="<?= WEB_ROOT ?>">
    <title>AdminLTE | Simple Tables</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/AdminLTE.css" rel="stylesheet" type="text/css"/>

    <!-- daterange picker -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"
          type="text/css"/>
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/iCheck/all.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap Color Picker -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="<?= WEB_ROOT ?>/public/admin/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

    <link href="<?= WEB_ROOT ?>/public/admin/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        #reservation:hover{
            cursor: pointer;
        }
    </style>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<?php require_once 'layout/__header.php' ?>
<!--end header-->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php require_once 'layout/__sidebar.php' ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <?php require_once "page/$page.php" ?>
        <!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= WEB_ROOT ?>/public/admin/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>-->

<!-- AdminLTE App -->
<script src="<?= WEB_ROOT ?>/public/admin/js/AdminLTE/app.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="<?= WEB_ROOT ?>/public/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?= WEB_ROOT ?>/public/plugins/ckfinder/ckfinder.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<?php if (!empty($js)): ?>
    <script src="<?= WEB_ROOT ?>/public/admin/js/<?= $js ?> " type="text/javascript"></script>
<?php endif; ?>


<!-- InputMask -->
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/input-mask/jquery.inputmask.date.extensions.js"
        type="text/javascript"></script>
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/input-mask/jquery.inputmask.extensions.js"
        type="text/javascript"></script>
<!-- date-range-picker -->
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/daterangepicker/daterangepicker.js"
        type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js"
        type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="<?= WEB_ROOT ?>/public/admin/js/plugins/timepicker/bootstrap-timepicker.min.js"
        type="text/javascript"></script>
<!-- AdminLTE App -->


<script>

    $(function () {

        //Date range picker
        $('#reservation').daterangepicker({
            format: 'YYYY/MM/DD'
        });

        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('details_description', {
                filebrowserBrowseUrl: "<?= WEB_ROOT ?>/public/plugins/ckfinder/ckfinder.html",
                filebrowserUploadUrl: "<?= WEB_ROOT ?>/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')"
            }
        );
        // CKEDITOR.replace('summary');
    });
    $(document).ready(function () {
        $('form').submit(function () {
            $.LoadingOverlay("show");
        });

        $('.logout').click(function (event) {

            if (!confirm("Bạn có muốn đăng xuất không !!!")) {
                event.preventDefault();
                return false
            }

        })
    })

    $(document).on('click', '.btn-delete-record', function (event) {
        var id = $(this).data('id');
        var model = $(this).data('model');
        if (confirm("Bạn có muốn xóa không !!!")) {
            location.href = '/admin/' + model + "/delete/" + id;
        }

    });

    $(document).on('click', '.logout', function (event) {

        if (!confirm("Bạn có muốn đăng xuất không !!!")) {
            event.preventDefault();
            return false;
        }

    });

    $(document).on('change', '#file-image-upload', function () {
        var _lastimg = $(this);
        if (_lastimg != '') {
            //console.log(_lastimg);
            uploadImg(_lastimg);
        }
    })

    function uploadImg(el) {
        var file_data = $(el).prop('files')[0];
        var type = file_data.type;
        var fileToLoad = file_data;
        console.log(file_data);
        var fileReader = new FileReader();

        fileReader.onload = function (fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result;
            $('#image-upload').attr('src', srcData);
        }
        fileReader.readAsDataURL(fileToLoad);

    };

</script>

</body>
</html>