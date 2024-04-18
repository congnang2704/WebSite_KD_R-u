<?php
    if (isset($_POST['btn_capnhat'])) {
        if ($_POST['txt_tenloaisp'] != null) {
            $tenloaisp = $_POST['txt_tenloaisp'];
            $mota = $_POST['txt_mota'];
            $sql = "INSERT INTO `loai`(`TenLoai`, `MoTa`) VALUES 
            ('$tenloaisp','$mota')";
        }

            if (mysqli_query($con, $sql) === TRUE) {
                ?>
                <script>
                    alert("Bạn đã thêm mới thành công");
                </script>       
            <?php
            } 
        }else{
            ?>
                <script>
                    alert("Bạn phải nhập tên sản phẩm");
                </script>       
            <?php
        }
?>