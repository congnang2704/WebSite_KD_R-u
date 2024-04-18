<?php
    include '../connet.php';

if (isset($_GET['IDKhachHang'])) {
    $id = $_GET['IDKhachHang'];
    
    $sql = "SELECT * FROM thongtinkhachang where IDKhachHang = $id";
    $kq = mysqli_query($con, $sql);
    if (mysqli_num_rows($kq) > 0) {
        $row1 = mysqli_fetch_array($kq);


?>
        <div class="quanlysp">
            <h3 style="color: red;refont-weight: bold; text-align: center; margin-top: 30px"><strong>CHI TIẾT ĐƠN HÀNG</strong></h3>
            <p style="margin-left: 15%; refont-weight: bold;"><strong>
                <?php echo "Tên khách hàng: " . $row1['Ten'];
                                                echo "</br>"; ?>
            </strong></p>
            <p style="margin-left: 15%;"><strong>
                <?php echo "Địa chỉ: " . $row1['DiaChi'] . " ";
                                                echo "</br>"; ?>
            </strong></p>
            <p style="margin-left: 15%;"><strong>
                <?php echo "Điện thoại: 0" . $row1['SDT'];
                                            echo "</br>"; ?>
            </strong></p>
            <p style="margin-left: 15%;"><strong>
                <?php echo "Ngày giao hàng: " . date("d/m/Y");
                                            echo "</br>"; ?>
            </strong></p>
            <p style="margin-left: 15%;"><strong>
                <?php echo "Phương thức thanh toán: " . $row1['PhuongThucTT']; ?>
            </strong></p>

        </div>


        <table class="table table-bordered p-3">
            <thead>
                <tr style="background-color: red;">
                    <td style="text-align: center; font-weight: bold;">STT</td>
                    <td style="text-align: center; font-weight: bold;">Mã Sản Phẩm</td>
                    <td style="text-align: center;font-weight: bold;">Tên sản phẩm</td>
                    <td style="text-align: center;font-weight: bold;">Ảnh sản phẩm</td>
                    <td style="text-align: center;font-weight: bold;">Giá</td>
                </tr>
            </thead>
            <tbody id="datarow">
                <?php
                $sql = ("SELECT * FROM thongtinsanpham where IDKhachHang = $id;");
                $kq = mysqli_query($con, $sql);
                $tong = 0;
                if (mysqli_num_rows($kq) > 0) {
                    $stt = 0;
                    while ($item = mysqli_fetch_array($kq)) {
                ?>
                        <tr>
                            <td style="text-align: center;"><?php echo ($stt + 1) ?></td>
                            <td style="text-align: center;"><?php echo $item['ID_SanPhamMua'] ?></td>
                            <td style="text-align: center;"><?php echo $item['Ten_SanPhamMua']; ?></td>
                            <td class="text-align: center;"><img  width="250px" height="250px" src="../img/<?php echo $item['AnhSanPhamMua']; ?> " alt=""></td>    
                            <td style="text-align: center;"><?php echo number_format($item['GiaSPMua']); ?></td>

                        </tr>
                <?php
                        $stt++;
                        $tong += $item['GiaSPMua'];
                    }
                }
                ?>
                <tr style="background-color: #faebd7;">
                <td colspan=5 style="text-align: center; ">Tổng tiền (chưa bao gồm thuế VAT):<strong style="color: red;"> <?php echo number_format($tong) ?> VNĐ</strong></td>
                </tr>
            </tbody>
        </table>
        <td>
            <a href="./ql_donhang/in_donhang.php?ID_SanPhamMua=<?php echo $id ?> " style="width: 150px; height: 50px;"
                data-sp-ma="2" class="btn btn-danger inhoadon-sanpham">In Hóa Đơn
            </a>
            <!-- <p style="float:right; margin-top:10px; padding-right:30px;"><a href="./hoadon/inHD.php?id_HD=<?php echo $id ?>" target="_blank">In hoá đơn</a></p> -->
        </td>
        

<?php
    }else{
        echo "lỗi";
    }
}
if (isset($_POST['xacnhan'])) {
    $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : '';
    if ($trangthai == '') {
        echo "<script language='javascript'>
                            alert('Xác nhận thất bại, bạn cần chọn lại');
                        </script>";
    } else {
        $sql_hd = ("UPDATE `hoadon` SET `trangthai_DH`='$trangthai' WHERE id_kh = $id");
        if (mysqli_query($con, $sql_hd)) {
            echo "<script language='javascript'>
                            alert('Xác nhận thành công');
                            window.location.href='./index.php?admin=chitietHD&id_HD=$id';
                        </script>";
        } else {
            echo "<script language='javascript'>
                            alert('Xác nhận thất bại');
                        </script>";
        }
    }
}
?>