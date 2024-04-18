<?php
    if (isset($_POST['btn_capnhat'])) {
        if ($_POST['txt_tenhangsp']) {
            $tenhangsp = $_POST['txt_tenhangsp'];
            $mota = $_POST['txt_mota'];
            $diachi = $_POST['txt_diachi'];
            $sql = "INSERT INTO `hang`(`TenHang`, `MoTa`, `DiaChi`) VALUES 
            ('$tenhangsp','$mota','$diachi')";
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