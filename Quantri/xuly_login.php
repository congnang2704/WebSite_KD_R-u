<?php
//session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['phanquyen'] == 1) {
        header("location:../index.php");
    }
    if ($_SESSION['phanquyen'] == 0) {
        header("location:../Quantri/.login.php");
    }
}
?>







<?php
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = MD5($_POST['pass']);
    $sql_check = mysqli_query($con, "select * from taikhoan where username = '$username'");
    $dem = mysqli_num_rows($sql_check);
    if ($dem == 0) {
        echo "<p class='thongbao1'>Tài khoản không tồn tại</p>";
    } else {
        $sql_check2 = "select * from taikhoan where username = '$username' and password = '$password'";
        $row = mysqli_query($con, $sql_check2);
        $dem2 = mysqli_num_rows($row);
        if ($dem2 == 0)
            echo "<p style='text-align:center'>Mật khẩu không chính xác</p>";
        else {
            while ($rows = mysqli_fetch_array($row)) {
                $_SESSION['username'] = $username;
                $_SESSION['phanquyen'] = $rows['phanquyen'];
                $_SESSION['IDTaiKhoan'] = $rows['IDTaiKhoan'];
                if ($rows['phanquyen'] == 0) {
                    echo "<script language='javascript'>
                            alert('Đăng nhập quản trị thành công');
                            window.open('./Quantri/index.php', '_self', 1);
                        </script>";
                } else {
                    // header("Location: ../index.php");
                    echo "<script language='javascript'>
                            alert('Đăng nhập người dùng thành công');
                            window.open('./index.php', '_self', 0);
                        </script>";
                }
            }
        }
    }
}
