<?php
    include("./connet.php");
    if (isset($_GET['IDHang'])) {
        $id = $_GET['IDHang'];
        $sql =" SELECT * FROM sanpham sp JOIN giasanpham gsp ON sp.IDSanPham = gsp.IDSanPham WHERE 1 and IDHang = $id";
        $kq = mysqli_query($con, $sql);
        if(mysqli_num_rows($kq) > 0){
            while($row=mysqli_fetch_array($kq)){
                
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-2">
                    <div class="card">
                            <img class="card-img-top mt-2" width="20px" height="250px" src="./img/<?php echo $row['Hinh'];?> " alt="">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: red;"><strong> <?php echo $row['TenSanPham'];?> </strong></h5>
                                    <h5 class="card-title" style="color: yellowgreen;"> <strong><?php echo number_format( $row['GiaBan']) ."vnđ";?> </strong></h6>
                                    <p class="card-text">Online Giá Rẻ</p>
                                    <p style="color: red;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    
                                        
                                        <a method="post" action="./index.php?sp=sanpham&id_sanpham=<?php echo $row['IDSanPham']; ?>" class="btn btn-primary" Style="margin-top: 10px;">Mua Ngay</a>
                                        <a href="./index.php?loaisp=chitietsp&IDSanPham=<?php echo $row['IDSanPham'] ?>" class="btn btn-primary" Style="margin-top: 10px;">Chi tiết</a>
                                    
                                </div>
                                <!-- <div class="card-footer text-muted">
                                    Footer của Card
                                </div> -->
                    </div>
                </div>
                <?php
            }
        }
    
    }else{
        echo"Đang cập nhật dữ liệu";
    }
?>