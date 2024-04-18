<?php

if (isset($_SESSION['cart'])) {
    //echo var_dump($_SESSION['cart']), "<br/>";
    //showcart($_SESSION['cart']);

?>
    <!DOCTYPE html>
    <html lang="vi" class="h-100">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Nền tảng - Kiến thức cơ bản về WEB | Bảng tin</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    </head>

    <body>


        <main role="main">
            <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <div class="container mt-4">
                <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <h1 class="text-center" style="color: red;">Giỏ hàng</h1>
                <div class="row">
                    <div class="col col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: red;">
                                    <th>STT</th>
                                    <th>Ảnh Đại Diện</th>
                                    <th>Tên Sản Phẩm</th>
                                    <!-- <th>Số Lượng</th> -->
                                    <th>Giá</th>
                                    <th>Tiện Ích</th>
                                </tr>
                            </thead>
                            <tbody id="datarow">
                                <?php
                                $stt = 0;
                                $countsp = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                ?>

                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td>
                                            <img src="./img/<?php echo $item['anhsp'];?>" style="height: 150px; width: 150px;" alt="">
                                        </td>
                                        <td><?php echo $item['tensp']; ?></td>
                                        <!-- <td><?php echo $item['sl']; ?></td> -->
                                        <td class="text-right"><?php echo number_format($item['giasp']); ?> VNĐ</td>
                                        <td>
                                            <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                            <a href="./index.php?loaisp=xoasp&id_xoa=<?php echo ($stt -1)?>" 
                                                data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                            </a>
                                            <!-- <a href="./index.php?loaisp=product_id=123">Xóa sản phẩm</a> -->
                                        </td>
                                    </tr>
                                    

                                <?php
                                    $stt++;
                                }
                                ?>
                            </tbody>
                            <tr style="font-size: 110%;">
                                <td></td>
                                <td style="font-size: 20px;"><strong>Tổng Tiền: </strong></td>
                                <td style="font-size: 20px; width: 500px;"><strong><?php
                                                $_TongTien = 0;
                                                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                                                    if ($_SESSION['cart'][$i]) {
                                                        $_TongTien += $_SESSION['cart'][$i]['giasp'];
                                                    }
                                                }
                                                echo number_format($_TongTien);
                                                ?> VNĐ</strong>
                                                
                                </td>
                                
                                
                        </tr>
                        </table>
                        
                        <a href="./index.php?loaisp=dathang&id_hang<?php echo $countsp; ?> " style="background-color: red;" class="btn btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Đặt Hàng</a>
                    </div>
                </div>
            </div>
            <!-- End block content -->
        </main>




    </body>

    </html>
<?php
} else {
?>
    <p text-center><?php echo "Bạn chưa có sản phẩm nào trong giỏ hàng"; ?></p>
<?php
}
?>