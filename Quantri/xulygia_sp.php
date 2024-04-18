<?php

    if (isset($_POST['btn_capnhat'])) {
        if ($_POST['idgiasp'] != null) {
            $giasp = $_POST['idgiasp'];
            $nhapvao = $_POST['txt_nhapvao'];
            $banra = $_POST['txt_banra'];
            $hieulucsp = $_POST['txt_hieulucsp'];
            $ngaycapnhat = $_POST['txt_ngaycapnhat'];
            $sql = "INSERT INTO `giasanpham`(`IDSanPham`, `GiaNhap`, `GiaBan`, `HieuLuc`, `NgayCapNhap`) VALUES
                ('$giasp','$nhapvao','$banra','$hieulucsp','$ngaycapnhat')";
        }
        if (mysqli_query($con, $sql) === TRUE) {
            ?>
            <script>
                alert("Bạn đã thêm mới thành công");
            </script>       
        <?php
        } 
    }else{
        ?>
            <script>
                alert("Bạn phải nhập tên sản phẩm");
            </script>       
        <?php
    }
?>