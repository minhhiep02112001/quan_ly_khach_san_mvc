<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="<?=WEB_ROOT?>">
    <title>AdminLTE | Simple Tables</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="./public/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="./public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="./public/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./public/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />


</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<?php require_once 'layout/__header.php'?>
<!--end header-->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php require_once 'layout/__sidebar.php'?>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <?php require_once "page/$page.php"?>
        <!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./public/admin/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="./public/admin/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

<?php if(!empty($js)):?>
    <script src="./public/admin/js/<?= $js ?> " type="text/javascript"> </script>
<?php endif; ?>

<script>
    $(document).ready(function (){
        $('form').submit(function(){
            $.LoadingOverlay("show");
        });

        $('.logout').click(function (event) {

            if(!confirm("Bạn có muốn đăng xuất không !!!")){
                event.preventDefault();
                return false
            }

        })

        $('.btn-delete').click(function (event) {

            if(!confirm("Bạn có muốn xóa không !!!")){
                event.preventDefault();
                return false
            }

        })
    })
    $(document).on('change' , '#file-image-upload' , function () {
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

        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result;
            $('#image-upload').attr('src', srcData);
        }
        fileReader.readAsDataURL(fileToLoad);

    }
</script>
</body>
</html>