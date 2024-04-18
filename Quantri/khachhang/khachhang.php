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
                        THÔNG TIN KHÁCH HÀNG</p> 
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: red; color: black;">
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Số điện thoại</th>
                                <th>Căn cước công dân</th>
                                <th>Email</th>                                
                                <th>Địa Chỉ</th>
                                <th>Phương Thức Thanh Toán</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <?php
                            $sql = ('SELECT * FROM `thongtinkhachang`');
                            $kq = mysqli_query($con, $sql);
                            if (mysqli_num_rows($kq) > 0) {
                                $stt = 0;
                                while ($item = mysqli_fetch_array($kq)) {
                            ?>
                                    <tr>
                                        <td><?php echo ($stt + 1) ?></td>
                                        <td style="text-align: center;"><?php echo $item['Ten'] ?></td>
                                        <td class="text-right"><?php echo $item['NgaySinh']; ?></td>
                                        <td class="text-right"><?php echo $item['GioiTinh']; ?></td>
                                        <td><?php echo $item['SDT']; ?></td>
                                        <td class="text-right"><?php echo $item['CCCD']; ?></td>
                                        <td class="text-right"><?php echo $item['Email']; ?></td>
                                        <td class="text-right"><?php echo $item['DiaChi']; ?></td>
                                        <td class="text-right"><?php echo $item['PhuongThucTT']; ?></td>
                                    </tr>
                            <?php
                                    $stt++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
        </div>
        <!-- End block content -->
    </main>




</body>

</html>
<?php

?>