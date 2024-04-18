<?php
    include 'connet.php';
    $hang_sql = "SELECT * from hang";
    $hang_kq = mysqli_query($con, $hang_sql);
    if (mysqli_num_rows($hang_kq) > 0) {
        while ($hang_row = mysqli_fetch_array($hang_kq)) {
            ?>
                <li><a href="./index.php?loaisp=hang&IDHang=<?php echo $hang_row['IDHang']?>"><?php echo $hang_row['TenHang']; ?></a></li>
            <?php
        }
    }

?>