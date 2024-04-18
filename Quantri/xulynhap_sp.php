<?php

use Dotenv\Parser\Value;

    if(isset($_POST['btn_capnhat'])){
        if ($_POST['txt_tensp'] != null) {
            $tensp = $_POST['txt_tensp'];
            $hangsx = $_POST['hangsx'];
            $loaisp = $_POST['loaisp'];
            $nhacc = $_POST['nhacc'];
            $anh = $_FILES['anhdaidien']['name'];
            if ($anh !='') {
                $dich = "../img/" . $anh;
                move_uploaded_file($_FILES['anhdaidien']['tmp_name'], $dich);
                $dich = substr($dich, 3);
            }
            echo $dich;
            $mota = $_POST['txt_mota'];
            $sql =" INSERT INTO `sanpham`(`TenSanPham`, `IDHang`, `IDLoai`, `IDNhaCungCap`,`Hinh`, `MoTaSanPham`) 
                VALUES ('$tensp','$hangsx','$loaisp','$nhacc','$anh','$mota')";

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
    }

?>