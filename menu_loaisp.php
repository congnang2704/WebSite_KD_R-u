<?php
    include 'connet.php';
    $sql= "SELECT * FROM loai";
    $kq= mysqli_query($con, $sql);
    if(mysqli_num_rows ($kq) > 0){
        while($row = mysqli_fetch_array($kq)){
            ?>
            <li><a href="./index.php?loaisp=loai&IDLoai=<?php echo $row['IDLoai']?>"><?php echo $row['TenLoai']?></a></li>
            <?php
        }
    }
?>