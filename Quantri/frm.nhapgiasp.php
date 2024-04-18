<?php
    include "../connet.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Giá SP</title>
</head>
<body>
    <style>
        @charset 'utf-8';
        body{
            font-size: 20px;
        }
        input{
            width: 300px;
            height: 30px;
        }
        option{
            width: 300px;
            height: 30px;

        }
        select{
            width: 200px;
            height: 30px;
        }
        .btn{
            width: 120px;
            height: 30px;
            text-align: center;
            margin: 0% 50%; 
        }
    </style>
        <form method="post" enctype="multipart/form-data">
        <h3 style="text-align: center;">Nhập Giá Sản Phẩm</h3>
        <table align="center" border="0" width="600px" height="200px">     
            <!-- Dòng Thứ Nhất -->
            <tr>
                <td></td>
                <td>ID Sản Phẩm</td>
                <td><select name="idgiasp" id="">
                <option value="">==Chọn ID Sản Phẩm==</option>
                        <?php
                            $sql = "Select * from sanpham";
                            $giasanpham = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($giasanpham)) {
                                echo "<option value =".$row['IDSanPham'].">".$row['TenSanPham']."</option>";
                            }
                        ?>
                </select></td>
                <td></td>
            </tr>
            <!-- Nhập Giá Bán Nhập Vào -->
            <tr>
                <td></td>
                <td>Giá Nhập Sản Phẩm Vào</td>
                <td><input type="text" placeholder="Giá Nhập Sản Phẩm Vào" name="txt_nhapvao"></td>
                <td></td>
            </tr>
            <!-- Nhập Giá Bán Bán Ra -->
            <tr>
                <td></td>
                <td>Giá Bán Sản Phẩm Ra</td>
                <td><input type="text" placeholder="Giá Bán Sản Phẩm Ra" name="txt_banra"></td>
                <td></td>
            </tr>
            <!-- Hiệu Lực Sản Phẩm -->
            <tr>
                <td></td>
                <td>Hiệu Lực Sản Phẩm</td>
                <td><input type="text" placeholder="Nhập Hiệu Lực Sản Phẩm" name="txt_hieulucsp"></td>
                <td></td>
            </tr>
            <!-- Nhập Ngày Cập Nhật -->
            <tr>
                <td></td>
                <td>Nhập Ngày Cập Nhật</td>
                <td><input type="date" placeholder="Nhập Ngày Cập Nhật" name="txt_ngaycapnhat"></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="4">
                    <input class="btn"  type="submit" value="Cập Nhật" name="btn_capnhat">
                </td>
            </tr>

            <?php include('xulygia_sp.php')?>
    
</body>
</html>