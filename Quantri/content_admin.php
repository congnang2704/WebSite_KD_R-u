<?php
    include('../connet.php');
    if (isset($_GET['admin'])) {
        switch ($_GET['admin']) {
            case 'sanpham':
                include ("frm.nhapsp.php");
                break;
            case 'chitietsanpham':
                include ("./chitiethang/chitietsanpham.php");
                break;
            case 'xoasp':
                include ("./chitiethang/xoasp.php");
                break;
            case 'loai':
                include ("frm.nhaploaisp.php");
                break;

            case 'hang':
                include ("frm.nhaphangsp.php");
                break;
            
            case 'gia':
                include ("frm.nhapgiasp.php");
                break;

            case 'hienthidm':
                include ("dmloaisp.php");
                break;

            case 'themdm':
                include ("fr.nhapDMSP.php");
                break;

            case 'suadm':
                include ("sua_dmloaisp.php");
                break;
                
            case 'donhang':
                include ("./ql_donhang/ql_donhang.php");
                break;

            case 'khachhang':
                include ("./khachhang/khachhang.php");
                break;

            case 'nguoidung':
                include ("./nguoidung/nguoidung.php");
                break;
            
            case 'chitiet':
                include ("./ql_donhang/ct_donhang.php");
                break;
            
            default:
                # code...
                break;
        }
    }
?>