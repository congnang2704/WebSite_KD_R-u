<?php
// include('../connet.php');
// include('../chitiethang/chitietsanpham.php');
if (isset($_GET['IDSanPham'])) {
    $id_xoa = $_GET['IDSanPham'];
    $sql = "DELETE FROM `sanpham` WHERE IDSanPham = '$id_xoa'";

    if (mysqli_query($con, $sql) == true) {
        echo "<script language='javascript'>
                            alert('Đã xóa thành công');
                            window.open('./index.php?admin=xoasp', '_self', 1);
                        </script>";
    }
}