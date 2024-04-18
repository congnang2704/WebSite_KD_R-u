<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
                    
                    .form_dang_nhap h2 {
                        margin: 15px;
                        padding:0;
                        color: black;
                    }
                    .form_dang_nhap .o_nhap{
                        position: relative;
                    }
                    .form_dang_nhap .o_nhap input{
                        position: relative;
                        width: 100%;
                        font-size: 1.2rem;
                        padding: 0.8rem 0;
                        color:  black;
                        margin-bottom:2rem;
                        border:none;
                        border-bottom:1px solid black;
                        outline:  none;
                        background:  transparent;
                    }
                    .form_dang_nhap .o_nhap label {
                        position: absolute;
                        top:0;
                        left:0;
                        font-size: 1.2rem;
                        padding: 0.8rem 0;
                        color:  black;
                        pointer-events: none;
                        transition: .5s;
                    }
                    .form_dang_nhap .o_nhap input:focus ~ label,
                    .form_dang_nhap .o_nhap input:valid ~ label {
                        top:-1.5rem;
                        left:0;
                        color:#03a9f4;
                        font-size:0.8rem;
                    }
                    .form_dang_nhap input[type="submit"] {
                        padding: 10px;
                        background: transparent;
                        border:none;
                        outline: none;
                        color:#fff;
                        background: red;
                        padding: 1rem 1.2rem;
                        font-size: 0.8rem;
                        cursor: pointer;
                    }
                    .form_dang_nhap a {
                        padding: 10px;
                        text-decoration: none;
                        height: 50px;
                        width: 80px;
                        background: transparent;
                        border:none;
                        outline: none;
                        color:#fff;
                        background: red;
                        font-size: 0.8rem;
                        cursor: pointer;
                    }
                </style>
                
                <div class="form_dang_nhap">
                    <h2 style="color: red;">Đăng Nhập</h2>
                    <form method="post" enctype="multipart/form-data">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <p style="text-align: center; font-weight: bold; color: red">Xin chào: <span> <?php echo $_SESSION['username'] ?></span></p>
                            <p style="text-align: center; font-weight: bold; color: white"><a href="./Quantri/logout.php">Thoát</a></p>
                        <?php } else { ?>
                            <!-- dòng thứ nhất -->
                            <div class="o_nhap">
                                <td><input type="text" name="user" placeholder="Username"></td>
                                <label>Username</label>
                            </div> 
                            <!-- dòng 2 -->
                            <div class="o_nhap">
                                <td><input type="password" name="pass" placeholder="Password"></td>
                                <label>Password</label>
                            </div>  
                            <!-- nút -->
                                <input href="index.php?content=dangky" type="submit" value="Đăng Nhập" name="login">
                                
                                
                                <a href="index.php?loaisp=dangky" type="submit">
                                    <p style="text-align: center; font-weight: italic;">Đăng ký</p>
                                </a>
                                
                                <!-- <input href="index.php?loaisp=dangky" type="submit" value="Đăng Ký" name="register"> -->
                            
                            <?php 
                            include('./connet.php');
                            include('./Quantri/xuly_login.php');
                            ?>
                    
                        <?php } ?>
                    </form> 
                </div> 
</body>
</html>