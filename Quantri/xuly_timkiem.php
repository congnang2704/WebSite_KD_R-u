<?php 
    include ("./connetion/connet.php"); 
    if(isset($_POST['timkiem'])) { 
        $tim = $_POST['search']; 
        $sql = "select * FROM sanpham WHERE TenSanPham like '%".$tim."%'"; 
        $rows = mysqli_query($con,$sql); 
        $tong = mysqli_num_rows($rows); 
        if($tong < 0) 
            echo"Không tìm được sản phẩm nào"; 
    else{ ?>
        <h2>Từ khóa <font color="red"><b><?php echo $tim ?></b></font> : có <?php echo $tong?> kết quả </h2> 
        <?php 
            while($row = mysqli_fetch_array($rows)) {?> 
                <li> 
                    <img src="<?php echo $row['Hinh']; ?>" style="width:100px; height:100px; font-style: bold; margin-top: 5px"> 
                    <a href="index.php?content=chitiet&chitiet=<?php echo $row['IDSanPham']; ?>"><?php echo "<p>".$row['TenSanPham']."</p>";?></a> 
                    <?php echo "<p style='color:#F00 ; font-style: bold; margin-top:5px; margin-bottom:5px';>Giá: ".number_format($row['GiaBan'])."đ</p>"; ?> 
                    <input type="hidden" name="hidden_name" value="<?php echo $row["TenSanPham"]; ?>" /> 
                    <input type="hidden" name="hidden_price" value="<?php echo $row["GiaBan"]; ?>" /> 
                    <input type="number" name="sl" value="1" style="width:30px"> 
                    <a href="index.php?content=add&idsp=<?php echo $row["IDSanPham"] ?>"><button style="width:60px; margin-bottom: 5px">Mua</button></a> 
                    <input type="submit" name="btntragop" value="Trả góp" style="width:60px; margin-bottom: 5px"> 
                </li> 
        <?php } 
    }
} ?>