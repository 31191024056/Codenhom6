<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Chi tiet SP</title>
    <link rel="shortcut icon" href="" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" >
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="page/ChitietSP.css">
</head>
<body>
    <?php
        include("admincp/config/config.php");
        $sql_chitiet = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[id]' LIMIT 1";
        $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
        $sql_img = "SELECT * FROM tbl_sanphamimg WHERE id_sanpham = '$_GET[id]' LIMIT 4";
        $query_img = mysqli_query($mysqli, $sql_img);

        while($row_chitiet = mysqli_fetch_array($query_chitiet)){
    ?>
    <div class="fullcontent-fluid">
        <!-- Header -->
        <!-- Chi tiet SP ---------------------- -->
       
        <div class="product-content">
            <div class="product-content-left">
                    <div class="product-content-left-img1">
                     <a class="zoom" href="#"> <img  src="<?php echo $row_chitiet['img_link'] ?>" alt="" > </a>
                    </div>
                    <div class="product-content-left-img2">
                        <?php
                        while($row_img = mysqli_fetch_array($query_img)){
                        ?>
                            <img src="<?php echo $row_img['img_link'] ?>" alt="">
                        <?php } ?>
                    </div>
            </div>
            <form action="page/xuly/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>" method="POST">
                <div class="product-content-right">
                        <div class="product-name">
                            <br><h1><?php echo $row_chitiet['tensanpham'] ?></h1> <br>
                            <p><span>M?? s???n ph???m: </span><span style="font-weight: bold;">Nhom6.sp<?php echo $row_chitiet['id_sanpham'] ?></span></p>
                        </div>
                        <div class="product-price">
                            <p><?php echo number_format($row_chitiet['price'],0,',','.')?> VN??</p>
                        </div>                        
                        <br>
                        <h3>M?? t??? s???n ph???m</h3>
                        <p><?php echo $row_chitiet['mota']?></p> <br>                   
                        <div class="product-size">
                            <p style="font-weight: bold;">Size: </p>
                            <input type="number" name="size" min="35" max="43" value="35" style="width:80px;" >
                                <br> </br>
                            <p style="font-weight: bold;">S??? l?????ng: </p>
                            <input type="number" name="soluong" min="0" max="10" value="1" style="width:80px;" >
                        </div> 
                        <!-- <p style="color: red;">B???n h??y ch???n size</p>  -->
                        <br>
                        <div class="pay-btn">
                            <p style="font-weight: bold; color: black;"><input type="submit" name="themgiohang" value="Th??m v??o gi??? h??ng" class="btn-themgiohang" style="background-color: black; color: white; height: 50px; width: 50%; font-size: 18px;"></p>
                        </div>
                            <style>
                                input .btn-themgiohang:hover{
                                    background-color: #FF5F17;
                                }
                            </style>
                </div>
            </form> 
        </div>
        
    <?php      
        }
    ?>
    <!-- ------------------------------------------ footer ------------------------------------- -->
        <div class="footer">
                <div class="footer-left"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Store.svg" style="width: 100%"></div>
                <div class="footer-center">
                    <div class="container1">
                        <br><p><font color="white">T???I ???NG D???NG DEERFOOTWEAR</font></p></br>
                        <div class="app">
                            <img src="https://pubcdn2.ivymoda.com/images/appstore.png" alt="">
                            <img src="https://pubcdn2.ivymoda.com/images/googleplay.png" alt="">
                            <p><font color="white">NH???P EMAIL ????? ????NG K??</font></p>
                            <input type="email" placeholder="Nh???p email c???a b???n">
                            <!-- <span class="input-group-btn"> -->
                            <button class="apply1" type="button"><font color="white">????ng K??</font></button>
                            <!-- </span> -->
                        </div>
                    </div>
                    <div class="ThongTin">
                         <!-- <li><a href="https://pubcdn2.ivymoda.com/images/img-congthuong.png"></a></li> -->
                         <li><a href="">Ch??nh s??ch</a></li>
                         <li><a href="">Tuy???n d???ng</a></li>
                         <li><a href="">Gi???i thi???u</a></li>
                         <li>
                             <a href="" class="fab fa-facebook"></a>
                             <a href="" class="fab fa-twitter"></a>
                             <a href="" class="fab fa-youtube"></a>
                         </li>
                    </div>
                    <center><font color="white"><p>Tr??? s??? ch??nh: <br>
                     279 Nguy???n Tri Ph????ng, Ph?????ng 5, Qu???n 10<br>
                     Th??nh ph??? H??? Ch?? Minh<br>
                     Li??n h??? h??? tr???: <b>0799778167</b>
                     </p></font>
                    </center>
                </div>
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6526865073474!2d106.66625811428689!3d10.761227762417896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee4ecfa255d%3A0x9e5ec3fa6801b7d6!2zMjc5IE5ndXnhu4VuIFRyaSBQaMawxqFuZywgUGjGsOG7nW5nIDUsIFF14bqtbiAxMCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1650278879233!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </div>

</body>
</html>