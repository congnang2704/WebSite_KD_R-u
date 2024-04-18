<?php

include('./connet.php');
if (isset($_GET['IDSanPham'])) {
    $id = $_GET['IDSanPham'];
    $sql = "SELECT * FROM sanpham sp JOIN giasanpham gsp ON sp.IDSanPham = gsp.IDSanPham WHERE sp.IDSanPham = $id ";
    $kq = mysqli_query($con, $sql);
    if (mysqli_num_rows($kq) > 0) {
        $row = mysqli_fetch_array($kq);

        //tạo mảng chứa sp
        $list_cart = array('id' => $row['IDSanPham'], 'tensp' => $row['TenSanPham'], 'anhsp' => $row['Hinh'], 'giasp' => $row['GiaBan']);

        //add vào giỏ hàng
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

        array_push($_SESSION['cart'], $list_cart);
        echo "<script language='javascript'>
                            alert('Đẫ thêm sản phẩm vào giỏ hàng thành công');
                            window.open('./index.php', '_self', 0);
                        </script>";
                        
            }
        } else {
            echo "Đang cập nhật dữ liệu";
        }

?>
        
