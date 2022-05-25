<?php
session_start();
include('../../admincp/config/config.php');

if(isset ($_POST['dathang'])){
    $id_donhang= rand(0,9999);
    $hoten=$_POST['hoten'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $ghichu=$_POST['note'];
    $insert_donhang="INSERT INTO tbl_donhang(id_donhang, trangthai, tenkhachhang, sdt, email, diachi, ghichu ) 
        VALUE ('".$id_donhang."', 'chưa giao hàng','".$hoten."','".$sdt."','".$email."','".$diachi."','".$ghichu."')";
    $insert_donhang_query = mysqli_query($mysqli, $insert_donhang);


    if($insert_donhang_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $size = $value['size'];
            $soluong = $value['soluong'];
            $insert_donsp="INSERT INTO tbl_donsanpham(id_donhang, id_sanpham, size, soluong) 
                VALUE ('".$id_donhang."','".$id_sanpham."','".$size."','".$soluong."')";
            $insert_donsp_query = mysqli_query($mysqli,$insert_donsp);            
        }
    }
}
header('Location:../../index.php?site=camon');
?>
