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

    <link rel="stylesheet" href="style.css">
    <title>Website Bán Hàng lớp</title>
</head>
<?php
    session_start();
    include('connet.php');
    ?>
<body>

    
    <div class="container bg-light">
        
        <div class="row ">
            <div class="nhan">
                <style>
                        .nhan{
                            text-align: center;
                        }
                        .nhan img {
                            width: 1300px;
                            height: 300px;
                        }
                    </style>
                <img id="img" onclick="changeImage()" src="slider_02.jpg" alt="">                  
            </div>
            <script>
                var index = 1;
                changeImage = function(){
                    var imgs = [ "img/slider_02.jpg", "img/02banner.png", "img/banner.png", "img/01banner.jpg"];
                    document.getElementById('img').src = imgs[index];
                    index ++;
                    if(index == 4){
                        index = 0;
                    }
                }
                setInterval(changeImage,1000);
            </script>
            
        </div>

        
        <div class="row ">
            <div class="menu_top">
                <ul> 
                    <strong>
                        <li><a href="index.php">Trang Chủ</a></li>
                        
                            <!-- //Menu trên -->
                            <?php
                                include 'menu_loaisp.php';
                                if (isset($_SESSION["cart"]) && $_SESSION["cart"] != null){
                                    $count = count($_SESSION["cart"]);
                                }else{
                                    $count = 0;
                                }
                            ?>
                            <p style="line-height:45px; text-align: right; margin-right: 10px; color:#F00;">
                                <a href="index.php?loaisp=giohang" style="text-decoration: none;  font-weight: bold;">
                                    <i class="fa fa-cart-arrow-down"> </i> Có <?php echo $count; ?> </a> Sản Phẩm 
                            </p>
                    </strong>
                    
                    
                    
                </ul>
            </div>

            
        </div>
        
        <!-- Khu vực chứa sản phẩm  -->
        <!-- Khung Chứa các sản phẩm và các nhu cầu cần có của một admin cần  -->
        <div class="row">        
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="menu_left">
                <ul> 
                    <strong>
                        <li><a href="index.php"> Trang Chủ</a></li>
                                <!-- Menu bên trái -->
                                <?php
                                    include 'menu_hangsp.php';                                    
                                ?>                            
                    </strong>
                </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row mt-2">

                    <p style="text-align:center; background: #fff; color:red;padding:7px; font-weight:bold;font-size:large">DANH SÁCH CÁC SẢN PHẨM</p> 

                    <!-- Sản Phẩm Thứ Nhất -->
                    <?php
                        if (isset($_GET['action'])) {
                            $action = $_GET['action'];
                        } else{
                            $action = "";
                            //include 'lay_allsp.php';
                            if (isset($_GET['loaisp'])) {
                                switch($_GET['loaisp']) {
                                    case 'loai':
                                        {
                                            include ('./laysptheoloai.php');
                                            break;                  
                                        }
                                    case 'hang':
                                        {
                                            include('./laysptheohang.php');
                                            break;
                                        }
                                    case 'giohang':
                                        {
                                            include('./Quantri/giohang/giohang.php');
                                            break;
                                        }
                                    case 'sanpham':
                                        {
                                        include('./Quantri/giohang/xuly_giohang.php');
                                        break; 
                                        } 
                                    case 'xoasp':
                                        {
                                        include('./Quantri/giohang/xoaSP_giohang.php');
                                        break; 
                                        } 
                                    case 'dathang':
                                        {
                                        include('./Quantri/giohang/dathang.php');
                                        break; 
                                        }
                                    case 'chitietsp':
                                        {
                                        include('./chitietsp.php');
                                        break; 
                                        } 
                                    
                                    case 'xldathang':
                                        {
                                        include('./Quantri/giohang/xuly_dathang.php');
                                        break; 
                                        } 
                                    case 'dangnhap':
                                        {
                                        include('./Quantri/login.php');
                                        break; 
                                        }
                                    case 'dangky':
                                        {
                                        include('./Quantri/dangky.php');
                                        break; 
                                        }  
                                    case 'timkiem':{
                                    
                                        // Kết nối đến cơ sở dữ liệu
                                        // include('./connet.php');
                                        
                                        // Kiểm tra xem người dùng đã nhấn nút Tìm kiếm chưa
                                        if (isset($_POST['btnSearch'])) {
                                            // Lấy giá trị từ ô input tìm kiếm
                                            $searchTerm = $_POST['txtSearch'];
                                        
                                            // Xử lý truy vấn tìm kiếm
                                            $query = "SELECT * FROM sanpham sp JOIN giasanpham gsp ON sp.IDSanPham = gsp.IDSanPham WHERE TenSanPham LIKE '%$searchTerm%'";
                                            $result = mysqli_query($con, $query);
                                        
                                            if(mysqli_num_rows($result) > 0){
                                                while($row=mysqli_fetch_array($result)){
                                                    
                                                    ?>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-2">
                                                    <div class="card">
                                                        <img class="card-img-top mt-2" width="20px" height="250px" src=" ./img/<?php echo $row['Hinh'];?> " alt="">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="color: red;"><strong> <?php echo $row['TenSanPham'];?> </strong></h5>
                                                                <h5 class="card-title" style="color: yellowgreen;"> <strong><?php echo number_format( $row['GiaBan']) ."vnđ";?> </strong></h6>
                                                                <p class="card-text">Online Giá Rẻ</p>
                                                                <p style="color: red;">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star-half-alt"></i>
                                                                    <i class="far fa-star"></i>
                                                                </p>
                                                                <input type="hidden" name="hidden_name" id="" value="<?php echo $row["TenSanPham"]?>"/>
                                                                <input type="hidden" name="hidden_name" id="" value="<?php echo $row["GiaBan"]?>"/>                                
                                                                
                                                                    <input type="number" name="sldat" value="1" style="width: 30px">
                                                                    <a href="./index.php?loaisp=sanpham&IDSanPham=<?php echo $row['IDSanPham'] ?>" class=" btn btn-primary" Style="margin-top: 10px;">Mua Ngay</a>
                                                                    <a href="./index.php?loaisp=chitietsp&IDSanPham=<?php echo $row['IDSanPham'] ?>" class="btn btn-primary" Style="margin-top: 10px;">Chi tiết</a>
                                                            </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                    break;
                                }

                                    default:
                                        break;
                                }
                            }else{
                                include 'lay_allsp.php';                            
                            }
                        }
                    ?>

                </div>
                <div>
                
            </div>
            </div>

            


            <div class="col-lg-2 col-md-6 col-sm-12">
                <!-- bg-secondary CHỈNH SỬA MÀU SẮC CHO PHẦN BÊN PHẢI-->
                
                <?php
                    include "./Quantri/login.php";
                    
                ?>
                
                
                
                        
                <p>
                    

                    
                    <form action="index.php?loaisp=timkiem" method="post">
                        <input type="text" name="txtSearch" placeholder="Nhập Từ khóa để tìm kiếm"  style=" height:30px; width:200px; margin-left: 0px;">
                        <input type="submit" name="btnSearch" value="Tìm kiếm" style="height: 30px; width: 150px;  margin-top: 10px; margin-left: 20px;">    
                    </form>
                </p>
                        
                        <ul class="menu_top">
                        <style>
                            .menu_top{
                                list-style-type: none;
                                overflow: hidden;
                                margin-top: 10px;
                            }


                            .menu_top li{
                                float: left;
                                margin-left: 10px;
                            }

                            .menu_top a{
                                color: #f40303;
                                text-decoration: none;
                            }

                            .menu_top a:hover{    
                                color: rgb(96, 96, 255);
                            }
                        </style> 
                            
                        </ul>
                    </div>
                </div>
                    
                
                
                
            </div>
            

            
        </div>
        
        
        <div class="row bg-success">
            <p style="text-align: center; padding: 50px;">© Đoàn công Năng</ps>
            
        </div>
        

    </div>
    
    
</body>
</html>