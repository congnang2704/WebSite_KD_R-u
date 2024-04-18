<?php
//include('connect.php');
?>
<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">


</head>

<body>


    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4 ">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

            <p style="text-align:center; background: #fff; color:red;padding:7px; font-weight:bold;font-size:40px">
                        QUẢN LÍ ĐƠN HÀNG</p> 
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: red; color: black;">
                                <th>STT</th>
                                <th>ID_Sản Phẩm Mua</th>
                                <th>Tên Sản Phẩm Mua</th>
                                <th>Ảnh Sản Phẩm Mua</th>
                                <th>ID Sản Phẩm</th>
                                <th>ID Khách Hàng</th>
                                <th>Giá SP</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <?php
                            $sql = ('SELECT * FROM `thongtinsanpham` ');
                            $kq = mysqli_query($con, $sql);
                            if (mysqli_num_rows($kq) > 0) {
                                $stt = 0;
                                while ($item = mysqli_fetch_array($kq)) {
                            ?>
                                    <tr>
                                        <td><?php echo ($stt + 1) ?></td>
                                        <td style="text-align: center;"><?php echo $item['ID_SanPhamMua'] ?></td>
                                        <td class="text-align: center;"><?php echo $item['Ten_SanPhamMua']; ?></td>
                                        <td class="text-align: center;"><img  width="250px" height="250px" src="../img/<?php echo $item['AnhSanPhamMua']; ?> " alt=""></td>                                        
                                        <td class="text-right"><?php echo $item['IDSanPham']; ?></td>
                                        <td class="text-right"><?php echo $item['IDKhachHang']; ?></td>
                                        <td class="text-right"><?php echo number_format( $item['GiaSPMua']);  ?>.VNĐ</td>
                                        <td>
                                            <a href="./index.php?admin=chitiet&IDKhachHang=<?php echo $item['IDKhachHang'] ?> " style="width: 100px; height: 80px;"
                                                data-sp-ma="2" class="btn btn-danger inhoadon-sanpham">Chi Tiết
                                            </a>
                                        </td>
                                    </tr>
                                    
                            <?php
                                    $stt++;
                                }
                                
                            }
                            ?>
                        </tbody>
                        
                    </table>
                    <a href="./ql_donhang/inhoadonall_sp.php?ID_SanPhamMua=" style="width: 150px; height: 50px;"
                            data-sp-ma="2" class="btn btn-danger inhoadon-sanpham">In Hóa Đơn
                        </a>
                </div>
                </div>
        </div>
        <!-- End block content -->
    </main>



</body>

</html>
<?php

?>