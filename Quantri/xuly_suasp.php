<?php 
    $idsp=$_GET['IDSanPham'];
    $sql="select * from sanpham where IDSanPham = $idsp";
    $rows = mysqli_query($con,$sql); 
    $row = mysqli_fetch_array($rows);
?>
<form action="update_sanpham.php?IDSanPham=<?php echo $idsp;?>" method="post" name="frm" onsubmit="" enctype="multipart/form-data">
    <div style="width: 700px; height: auto; align-items: center; align: center">
        <table>
            <tr height="30" style="font-weigth: bold" align="center">
                <td colspan=2><h1>Sửa Sản Phẩm</h1></td>
            </tr>
            <tr> <td>Tên SP</td><td><input type="text" name="tensp" value="<?php echo $row['TenSanPham'] ?>"/></td> </tr> 
            <tr> <td>Loại sản phẩm</td><td> 
                <select name="danhmuc">
                    <?php 
                        $sql = "select * from loai";
                        $rows1 = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($rows1)) {
                            ?>
                                <option value="<?php echo $row1['IDLoai']?>" <?php if($row['IDLoai'] == $row1['IDLoai']) echo'select="selected"';?>><?php echo $row1['TenLoai']?></option>
                            <?php 
                        }
                    ?>                        
                </select>
        </table>    
    </div>
</form>