<?php
$con = mysqli_connect('localhost', 'root', '', 'thuongmai');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
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
            <h1 style="color: red;" class="text-center">Thông Tin Sản phẩm</h1>
            <a href="./index.php?admin=sanpham" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" style=" margin: 20px;">
                <i class="fa fa-trash" aria-hidden="true"></i> Thêm
            </a>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: red;">
                                <th>STT</th>                                
                                <th>ID Sản Phẩm</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <?php
                             $sql=('SELECT * FROM sanpham sp JOIN giasanpham gsp ON sp.IDSanPham = gsp.IDSanPham WHERE 1');
                            $kq = mysqli_query($con, $sql);
                            if (mysqli_num_rows($kq) > 0) {
                                $stt = 0;
                                while ($item = mysqli_fetch_array($kq)) {
                            ?>
                                    <tr>
                                        <td><?php echo ($stt + 1) ?></td>
                                        
                                        <td><?php echo $item['IDSanPham']; ?></td>
                                        <td style="text-align: center;">
                                            <img class="card-img-top mt-2" width="260px" height="250px" src=" ../img/<?php echo $item['Hinh'];?> " alt="">
                                        </td>
                                        <td><?php echo $item['TenSanPham']; ?></td>
                                        <td class="text-right"><?php echo number_format($item['GiaBan']); ?> VND</td>
                                        <td>
                                            
                                            <a href="./index.php?admin=xoasp&IDSanPham=<?php echo $item['IDSanPham']; ?>" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" style="margin: 20px;">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Xóa
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
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>
</body>

</html>
<?php
?>