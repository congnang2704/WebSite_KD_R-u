<?php
    include "../connet.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Loại SP</title>
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
        <h3 style="text-align: center;">Nhập Loại Sản Phẩm</h3>
        <table align="center" border="0" width="600px" height="200px">     
            <!-- Dòng Thứ Nhất -->
            <tr>
                <td></td>
                <td>Nhập Loại Sản Phẩm</td>
                <td><input  type="text" name="txt_tenloaisp" placeholder="Nhập Tên Loại Sản Phẩm"></td>
                <td></td>
            </tr>
            <!-- Nhập Mô tả -->
            <tr>
                <td></td>
                <td>Mô Tả Loại Sản Phẩm</td>
                <td><input type="text" placeholder="Nhập Mô Tả Loại Sản Phẩm" name="txt_mota"></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="4">
                    <input class="btn"  type="submit" value="Cập Nhật" name="btn_capnhat">
                </td>
            </tr>

            <?php include('xulynhaploai_sp.php')?>
    
</body>
</html>