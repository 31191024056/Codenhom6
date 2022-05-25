<!-- dùng để gọi các trang của web bằng lệnh if else -->
<!-- <div class="main" style ="padding: 0; margin: 0; width: 100%"> -->
    <?php
        if(isset ($_GET['site'])){
            $tam = $_GET['site'];
        }else{
            $tam = '';
        }
        if ($tam =='dssanpham'){
            include ("page/DSsanpham.php");
        }
        elseif($tam =='chitietsp'){
            include("page/ChitietSP.php");
        }
        elseif($tam =='timkiem'){
            include("page/TimKiem.php");
        }
        elseif($tam =='giohang'){
            include("page/GioHang.php");
        }
        elseif($tam =='thongtinmuahang'){
            include("page/thongtinmuahang.php"); 
        }
        elseif($tam =='camon'){
            include("page/CamOn.php");
        }
        else{
            include ("page/TrangChu.php");
        }
    ?>
<!-- </div> -->



