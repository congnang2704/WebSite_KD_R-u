<?php
include('connet.php');
if (isset($_GET['IDSanPham'])) {
    $id = $_GET['IDSanPham'];
    
    
    $sql = "SELECT * FROM sanpham sp, hang hsp , giasanpham gsp  WHERE sp.IDHang=hsp.IDHang and gsp.IDSanPham = sp.IDSanPham and sp.IDSanPham=$id";
    
    $kq = mysqli_query($con, $sql);
    if (mysqli_num_rows($kq) > 0) {
        $row = mysqli_fetch_array($kq);
?>
        <div>
            <ul style="list-style-type: none; display: block">
                <li style="text-align: center;">
                    <h1 class="card-title" style="color: red;"><?php echo $row['TenSanPham']; ?></h1>
                </li>
                <li style="text-align: center; ">

                    <img class="card-img-top" src="./img/<?php echo $row['Hinh'] ?>" style="border: #ff6876 solid 3px; border-radius: 3px; width:800px; height:800px;" alt="">

                </li>
                <li style="text-align: center; ">
                    <div>
                        <h1 style="color: red;">Giá: <?php echo number_format($row['GiaBan']); ?> VNĐ</h1style=>
                        <h1 style="color: red;">Hãng <?php echo $row['TenHang']; ?> </h1>
                    </div>
                </li>
                <li>
                    <h3><?php echo $row['MoTaSanPham']; ?> </h3>
                </li>
                <li>
                    <h6><a href="./index.php?loaisp=sanpham&IDSanPham=<?php echo $row['IDSanPham']; ?>" class=" btn btn-primary" Style="margin-top: 10px;">Thêm vào giỏ hàng</a>
                    </h6>

                </li>
            </ul>

        </div>
<?php

    }
} else {
    echo "Đang cập nhật dữ liệu";
}
?>