<?php
if (isset($_SESSION['username'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="admin_style.css" rel="stylesheet">
    </head>

    <body>
        <form method="post" enctype="multipart/form-data">
        <p style="text-align:center; background: #fff; color:red;padding:7px; font-weight:bold;font-size:40px">
                        THÔNG TIN KHÁCH HÀNG</p> 
            <!-- <h3 style="text-align: center; font-size: 170%;">Thông Tin khách hàng</h3> -->
            <table align="center" boder="0" margin-top="50px">
                <!-- Dòng Thứ Nhất -->
                
                <!-- Dòng Thứ 4 -->
                <tr style="font-size: 130%;">
                    
                    <td>Nhập Tên</td>
                    <td><input type="text" placeholder="Nhập Tên" name="txt_ten"></td>
                    <td></td>
                </tr>

                <!-- Dòng thứ 5 -->
                <tr style="font-size: 150%;">
                    
                    <td>Ngày Sinh</td>
                    <td><input type="date" placeholder="Nhập SĐT" name="txt_ngaysinh"></td>
                    <td></td>
                </tr>

                <tr style="font-size: 130%;">
                    <td class="tieude">Giới Tính</td>
                    <td>
                        <select name="txt_gioitinh">
                            <option value="">Chọn Giới Tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Không công khai">Không Công Khai</option>
                        </select>
                    </td>


                <tr style="font-size: 130%;">                    
                    <td>SĐT</td>
                    <td><input type="text" placeholder="Nhập SĐT" name="txt_sdt"></td>
                    <td></td>
                </tr>

                <tr style="font-size: 130%;">                    
                    <td>CCCD</td>
                    <td><input type="text" placeholder="Nhập Căn Cước Công Dân" name="txt_cccd"></td>
                    <td></td>
                </tr>

                <!-- Dòng Thứ 6 -->
                <tr style="font-size: 130%;">                    
                    <td>Email</td>
                    <td><input type="text" placeholder="Nhập Email" name="txt_email"></td>
                    <td></td>
                </tr>

                <!-- Dòng Thứ 6 -->
                <tr style="font-size: 130%;">               
                    <td>Địa Chỉ</td>
                    <td><input type="text" placeholder="Nhập Địa Chỉ" name="txt_diachi"></td>
                    <td></td>
                </tr>

                <!-- DÒng thứ 7 -->
                <tr style="font-size: 130%;">
                    <td class="tieude">Phương thức </td>
                    <td>
                        <select name="txt_phuongthuc">
                            <option value="">Chọn phương thức thanh toán</option>
                            <option value="Qua bưu điện">Qua bưu điện</option>
                            <option value="Qua thẻ ATM">Qua thẻ ATM</option>
                            <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                        </select>
                    </td>
            </tr>

                

                

                <!-- Bảng Xem thông tin -->
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: red;">
                            <th>STT</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody id="datarow">
                        <?php
                        $stt = 0;
                        $countsp = 0;
                        foreach ($_SESSION['cart'] as $item) {
                        ?>
                            <tr>
                                <td><?php echo ($stt + 1) ?></td>
                                <td>
                                    <img src="./img/<?php echo $item['anhsp'] ?> " style="height:150px;" alt="">
                                </td>
                                <td><?php echo $item['tensp']; ?></td>
                                <td class="text-right"><?php echo number_format($item['giasp']); ?> VND</td>
                            </tr>
                        <?php
                            $stt++;
                        }
                        ?>
                    </tbody>
                    <tr style="font-size: 110%;">
                    <td></td>
                    <td></td>
                    <td style="font-size: 20px;"><strong>Tổng Tiền: </strong></td>
                    <td style="font-size: 20px; width: 300px;"><strong> <?php
                                    $_TongTien = 0;
                                    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                                        if ($_SESSION['cart'][$i]) {
                                            $_TongTien += $_SESSION['cart'][$i]['giasp'];
                                        }
                                    }
                                    echo number_format($_TongTien);
                                    ?> VNĐ </strong></td>
                    
                    
                        
                </tr>
                </table>
                
                <!-- nút -->

                <td colspan="3" style="align-items: center; margin-top: 20px;">
                        <input type="submit" style="background-color: red;" value="Đặt hàng" name="btn_dathang"></td>
                <?php include('xuly_dathang.php') ?>


            </table>
        </form>
    </body>

    </html>
<?php
} else {
    echo "<script language='javascript'>
                            alert('Bạn hãy nhập thông tin trước khi mua hàng');
                            window.open('./index.php', '_self', 0);
                        </script>";
}
?>