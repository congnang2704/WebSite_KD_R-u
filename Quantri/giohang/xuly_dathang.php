<?php
if (isset($_SESSION['username'])) {

    if (isset($_POST['btn_dathang'])) {
        
        if (
            $_POST['txt_ten'] != null || $_POST['txt_ngaysinh'] != null || $_POST['txt_gioitinh'] != null
            || $_POST['txt_cccd'] != null || $_POST['txt_sdt'] != null || $_POST['txt_email'] != null || $_POST['txt_phuongthuc'] != null
        ) {
            $tenKH = $_POST['txt_ten'];
            $ngaysinh = $_POST['txt_ngaysinh'];
            $gioitinh = $_POST['txt_gioitinh'];
            $cccdKH = $_POST['txt_cccd'];
            $sdtKH = $_POST['txt_sdt'];
            $emailKH = $_POST['txt_email'];
            $diachiKH = $_POST['txt_diachi'];
            $PTTT = $_POST['txt_phuongthuc'];
            
            $con = mysqli_connect('localhost', 'root', '', 'thuongmai');
            mysqli_set_charset($con, 'utf8');

            $user=$_SESSION['IDTaiKhoan'];
            $sql_TTKH = "INSERT INTO thongtinkhachang(IDTaiKhoan, Ten, NgaySinh, GioiTinh, SDT, CCCD, Email,DiaChi, PhuongThucTT, time) 
            VALUES ('$user','$tenKH','$ngaysinh','$gioitinh','$cccdKH','$sdtKH','$emailKH', '$diachiKH', '$PTTT', CURRENT_TIMESTAMP())";
if (mysqli_query($con, $sql_TTKH) === true) {
    $id_kh=mysqli_insert_id($con);
    foreach($_SESSION['cart'] as $id =>$value) {
        $tenSP = $value['tensp'];
        $giaSP=$value['giasp'];
        $anhSP=$value['anhsp'];
        $idsp=$value['id'];
        
        $sql_TTHD = "INSERT INTO thongtinsanpham( Ten_SanPhamMua, AnhSanPhamMua, IDSanPham , IDKhachHang, GiaSPMua) 
                    VALUES ('$tenSP','$anhSP','$idsp', '$id_kh', '$giaSP')";
        echo $sql_TTHD;
        mysqli_query($con, $sql_TTHD);
        // array_splice($_SESSION['cart'], $id_hang, 1);
    }
}

?>
                <script>
                    alert("Đặt hàng thành công");
                    window.open('./index.php', '_self', 0);
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Đặt hàng không thành công")
                </script>
            <?php
            }
        } else { ?>
            <script>
                alert("Bạn cần phải nhập đầy đủ thông tin")
            </script>
<?php
        }
    }
// } else {
//     echo "<script language='javascript'>
//                             alert('Bạn cần đăng nhập trước khi đặt hàng');
//                             window.open('./index.php', '_self', 0);
//                         </script>";
// }