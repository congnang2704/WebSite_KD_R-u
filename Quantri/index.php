<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="index.css">
    <title>Trang Quản Trị Hệ Thống</title>
</head>
<body>    
    <div style="width: 100%; align-items: center;">
        <div class="banner">
        <div class="row ">
            <div class="nhan">
                <style>
                        .nhan{
                            text-align: center;
                        }
                        .nhan img {
                            width: 100%;
                            height: 300px;
                        }
                    </style>
                <img id="img" onclick="changeImage()" src="../img/slider_02.jpg" alt="">                  
            </div>
            <script>
                var index = 1;
                changeImage = function(){
                    var imgs = ["../img/slider_02.jpg", "../img/02banner.png", "../img/banner.png", "../img/01banner.jpg"];
                    document.getElementById('img').src = imgs[index];
                    index ++;
                    if(index == 4){
                        index = 0;
                    }
                }
                setInterval(changeImage,1000);
            </script>
            
        </div>
        </div>
        <div class="menu_ngang">
            <style>
                .menu-ngang{
                    width: 100%;
                    height: 60px;
                    background: red;
                    
                }
                .menu-ngang ul {
                    text-align: right; 
                    margin-right: 20px;
                    list-style-type: none;
                    color: #fff;
                }
                .menu-ngang ul p {
                    display: inline-table;
                    width: auto;
                    height: 40px;   
                    line-height: 60px;
                    margin-left: 2%;
                    position: relative;
                }
                .menu-ngang ul p a {
                    text-decoration: none;
                    color: #fff;
                    display: block;
                }
                .menu-ngang ul p :hover {
                    color: red;
                    border-radius: 3px;
                }
            </style>
            <p style="height:30px; text-align: right; font-weight: bold; size: 90%; color: red">Welcome: ADMIN</p>
            <p style="height:30px; text-align: right; font-weight: bold; size: 90%; color: red"><a href="./logout.php">Thoát</a></p>
        </div>
        <div class="conten">
            <div class="left">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="?admin=chitietsanpham">Danh Mục Sản Phẩm</a></li>
                    <li><a href="?admin=donhang">Quản Lý Đơn Hàng</a></li>
                    <li><a href="?admin=khachhang">Quản Lý Khách Hàng</a></li>
                    <li><a href="?admin=loai">Danh Mục Loại Sản Phẩm</a></li>
                    <li><a href="?admin=hang">Danh Mục Hãng Sản Phẩm</a></li>
                    <li><a href="?admin=gia">Danh Mục Giá Sản Phẩm</a></li>
                    <li><a href="?admin=nguoidung">Danh Mục Người Sử Dụng</a></li>
                </ul>
            </div>
            <div class="right">
                <?php
                    include('./content_admin.php');
                ?>
            </div>
        </div>
        
    </div>
    
</body>
</html>