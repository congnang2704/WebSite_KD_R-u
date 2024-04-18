<?php
    include('../connet.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_style.css">
    
    <title>Nhập SP</title>
</head>
<body>
    <style>
        @charset 'utf-8';
        body{
            font-size: 20px;
        }
        input{
            width: 500px;
            height: 30px;
        }
        select{
            width: 300px;
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
        <h3 style="text-align: center;">Nhập Danh Mục Sản Phẩm</h3>
        <table align="center" border="0" width="800px" height="400px">            
            <!-- Dòng Thứ Nhất -->
            <tr>
                <td></td>
                <td>Nhập Tên Sản Phẩm</td>
                <td><input  type="text" name="txt_tensp" placeholder="Nhập Tên Sản Phẩm"></td>
                <td></td>
            </tr>

            <!-- Dòng Thứ Hai -->
            <tr>
                <td></td>
                <td>Hãng Sản Xuất</td>
                <td><select name="hangsx" id="">
                <option value="">==Chọn Loại Sản Phẩm==</option>
                        <?php
                            $sql = "Select * from hang";
                            $sanpham = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($sanpham)) {
                                echo "<option value =".$row['IDHang'].">".$row['TenHang']."</option>";
                            }
                        ?>
                </select></td>
                <td></td>
            </tr>

            <!-- Dòng Thứ Ba Loại Sản Phẩm -->
            <tr>
                    <td></td>
                    <td>Chọn loại sản phẩm</td>
                    <td><select name="loaisp" id="">
                        <option value="">==Chọn Loại Sản Phẩm==</option>
                        <?php
                            $sql = "Select * from loai";
                            $sanpham = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($sanpham)) {
                                echo "<option value =".$row['IDLoai'].">".$row['TenLoai']."</option>";
                            }
                        ?>
                    </select></td>
                    <td></td>
            </tr>

            <!-- Dòng Thứ Tư -->
            <tr>
                <td></td>
                <td>Chọn Nhà Cung Cấp</td>
                <td><select name="nhacc" id="">
                <option value="">==Chọn Loại Sản Phẩm==</option>
                        <?php
                            $sql = "Select * from nhacungcap";
                            $sanpham = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($sanpham)) {
                                echo "<option value =".$row['IDNhaCungCap'].">".$row['TenNhaCungCap']."</option>";
                            }
                        ?>
                </select></td>
                <td></td>
            </tr>

            <!-- Dòng Thứ Năm -->
            <tr>
                <td></td>
                <td>Chọn File Ảnh</td>
                <td><input type="file" name="anhdaidien" id=""></select></td>
                <td></td>
            </tr>

            <!-- Dòng Thứ Sáu -->
            <tr>
                <td></td>
                <td>Mô Tả Sản Phẩm</td>
                <td><input type="text" placeholder="Nhập Mô Tả Sản Phẩm" name="txt_mota"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input class="btn"  type="submit" value="Cập Nhật" name="btn_capnhat">
                </td>
            </tr>

            <?php include('xulynhap_sp.php')?>

        </table>
    </form>
</body>
</html>