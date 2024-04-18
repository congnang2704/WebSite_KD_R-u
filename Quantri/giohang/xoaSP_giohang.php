<?php
// include('connet.php');
// include('giohang.php');

// $product_id = $_GET['product_id'];

// // Lấy danh sách sản phẩm trong giỏ hàng từ session
// $cart_items = $_SESSION['cart_items'];

// // Xóa sản phẩm có ID là $product_id khỏi giỏ hàng
// unset($cart_items[$product_id]);

// // Cập nhật lại danh sách sản phẩm trong giỏ hàng
// $_SESSION['cart_items'] = $cart_items;

// // Chuyển người dùng trở lại trang giỏ hàng
// header('Location: cart.php');
// exit();

// include('connect.php');
include('giohang.php');
if (isset($_GET['id_xoa'])) {
    $id_xoa = $_GET['id_xoa'];

    if (count($_SESSION['cart']) == 1) {
        $_SESSION['cart'] = null;
    } else {
        array_splice($_SESSION['cart'], $id_xoa, 1);
    }

    echo "<script language='javascript'>
                                alert('Đã xóa thành công');
                                window.open('index.php?sp=giohang', '_self', 0);
                            </script>";
}
?>