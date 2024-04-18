<?php
//include('../connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="admin_style.css" rel="stylesheet">
</head>

<style>
    @charset 'utf-8';

    input{
        width: 300px;
        height:60px;
    }
    .btn{
        width: 100px;
        height: 50px;
        
    }
    select{
        width: 250px;
        height: 40px;
    }

</style>

<body>
    <form method="post" enctype="multipart/form-data">
        <h3 style="text-align: center; font-size: 200%; color: red;">Đăng ký tài khoản</h3>
        <table align="center" boder="0" margin-top="100px">
            <!-- dòng thứ nhất -->
            <tr style="font-size: 110%;">
                <td>Mời bạn nhập tên đăng nhập</td>
                <td></td>
                <td><input type="text" name="user" placeholder="Mời bạn nhập tên đăng nhập"></td>
                <td></td>
            </tr>
            <tr style="font-size: 110%;">
                <td>Mời bạn nhập mật khẩu</td>
                <td></td>
                <td><input type="text" name="pass" placeholder="Mời bạn nhập mật khẩu"></td>
                <td></td>
            </tr>
            <tr style="font-size: 110%;">
                <td>Nhập lại mật khẩu</td>
                <td></td>
                <td><input type="text" name="confirmPass" placeholder="Nhập lại mật khẩu"></td>
                <td></td>
            </tr>
            <!-- nút -->
            <tr style="font-size: 110%;">
                <td colspan="3" align="center" margin-top="20px">
                    <input type="submit" value="Đăng ký" name="register">
                </td>
            </tr>
            
            <?php 
                include('./connet.php');
                include('./Quantri/xuly_dangky.php');
                ?>
        </table>
    </form>
</body>

</html>