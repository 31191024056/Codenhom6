<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/277691332_1002053574027888_7782645681973856683_n.png?stp=dst-png_s206x206&_nc_cat=105&ccb=1-5&_nc_sid=aee45a&_nc_ohc=5MSCPqhiyiwAX8_0G7N&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLgyRiBRTEcKgYxhYUSApM3pqO0Z4oRBB0D1O3q39pKGA&oe=62815A7A">
    <meta charset="utf-8">
    <link href="page/DSsanpham.css" rel="stylesheet" />
    <title>Danh sách sản phẩm</title>
    
    <!-- Link header, footer -->
    <link rel="shortcut icon" href="" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" >
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    
</head>
<body>
    <?php
        include("admincp/config/config.php");
        $orderCondition = "";
        //sắp xếp theo giá
        $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
        if(!empty($orderSort)){
            $orderCondition = "ORDER BY tbl_sanpham.price ".$orderSort.""; 
        }
        //lọc theo giá
        $orderFilter = isset($_GET['filter']) ? $_GET['filter'] : "";
        if(!empty($orderFilter)){
            switch ($orderFilter){
                case '1':
                    $orderCondition = "AND price < 500000"; break;
                case '2':
                    $orderCondition = "AND price >= 500000 AND price <= 1000000"; break;
                case '3':
                    $orderCondition = "AND price > 1000000"; break;
                default:
                $orderCondition = ""; break; 
            }
        }     
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE id_danhmuc='$_GET[id]' ".$orderCondition."";
        $query_pro = mysqli_query($mysqli, $sql_pro);

        $sql_dm = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[id]'";
        $query_dm = mysqli_query($mysqli, $sql_dm);
        $tam = $_GET['id'];
    ?>
    <!-- ========*************============== -->
    <div class="fullcontent-fluid">
        <!-- Header -->
    <!-----CONTENT----->
    <div class="containerfull">
    <?php
    while($row_dm = mysqli_fetch_array($query_dm)){
        $tam = $_GET['id'];
    ?>
        <!-----Bộ lọc sản phẩm----->        
        <div class="header-position">
            <div class="wall-header_content">  
                    <h3 class="wall-header_title" id="shoes" style="width:100%;"><font size="6">
                        Sản Phẩm <?php echo $row_dm['tendanhmuc']?></font>
                    </h3>
                  
                    <div class="locfull">
                        <div class="loc">                        
                                <select class="loc1" style="font-size:15px;" 
                                        onchange="this.options[this.selectedIndex].value && (window.location 
                                        = this.options[this.selectedIndex].value);">                                                       
                                    <option value="index.php?site=dssanpham&id=<?=$tam?>">--Sắp xếp giá--</option>
                                    <option value="index.php?site=dssanpham&id=<?=$tam?>&sort=asc">Giá từ thấp đến cao</option>
                                    <option value="index.php?site=dssanpham&id=<?=$tam?>&sort=desc">Giá từ cao đến thấp</option>
                                </select>                       
                        </div>
                    </div>
            </div>
        </div>
        <hr style="background-color: black; height: 2px; border: 0;">
        <!-----DS SP----->
        <div class="row" >
            <!-----Bộ lọc cụ thể----->
            <div class="boloc-tong">
                <div id="accordion" class="panel panel-primary behclick-panel">
                    <div class="panel-heading" id="heading-tong">
                        <h3 class="panel-title">Lọc sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-heading ">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>Giá tiền</a>
                            </h4>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse in" >
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox" style="padding-left: 18px; padding-top:10px;">
                                        <a href ="index.php?site=dssanpham&id=<?=$tam?>&filter=1" style="color: black;">Dưới 500.000đ</a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox" style="padding-left: 18px; padding-top:10px;">
                                        <a href ="index.php?site=dssanpham&id=<?=$tam?>&filter=2" style="color: black;">500.000đ - 1 triệu</a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox" style="padding-left: 18px; padding-top:10px;">
                                        <a href ="index.php?site=dssanpham&id=<?=$tam?>&filter=3" style="color: black;">Trên 1 triệu</a>
                                    </div>
                                </li>                              
                            </ul>
                        </div>                    
                    </div>
                </div>

            </div>            

            <!--Kết quả tìm kiếm-->
            <div class="timkiem-tong">
                <!----------------dòng sản phẩm thứ 1----------------->

                <section class="show-product1">
                    <?php 
                    while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
                    <div class="product-card1">
                        <a href="index.php?site=chitietsp&id=<?php echo $row_pro['id_sanpham']?>" >
                            <div class="product-img">
                                <img src="<?php echo $row_pro['img_link']?>" width="100%">
                            </div>
                            <!-- <div class="product-cachtrong"></div> -->
                            <div class="product-thongtin">
                                <a href="index.php?site=chitietsp&id=<?php echo $row_pro['id_sanpham'] ?>" >
                                    <?php echo $row_pro['tensanpham'] ?></a>
                                <h4><?php echo number_format($row_pro['price'],0,',','.')?> VNĐ</h4>
                            </div>
                        </a>
                    </div>     
                    <?php      
                    }
                    ?>
                </section>
            </div>
            <!----------------------------->
        </div>
    <?php
        //}
    }
    ?>
    </div>
    <br style="clear: both">

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer-left"><img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Store.svg" style="width: 100%"></div>
        <div class="footer-center">
            <div class="container1">
                <br><p><font color="white">TẢI ỨNG DỤNG DEERFOOTWEAR</font></p></br>
                <div class="app">
                    <img src="https://pubcdn2.ivymoda.com/images/appstore.png" alt="">
                    <img src="https://pubcdn2.ivymoda.com/images/googleplay.png" alt="">
                    <p><font color="white">NHẬP EMAIL ĐỂ ĐĂNG KÝ</font></p>
                    <input type="email" placeholder="Nhập email của bạn">
                    <!-- <span class="input-group-btn"> -->
                    <button class="apply1" type="button"><font color="white">Đăng Ký</font></button>
                    <!-- </span> -->
                </div>
            </div>
            <div class="ThongTin">
                 <!-- <li><a href="https://pubcdn2.ivymoda.com/images/img-congthuong.png"></a></li> -->
                 <li><a href="">Chính sách</a></li>
                 <li><a href="">Tuyển dụng</a></li>
                 <li><a href="">Giới thiệu</a></li>
                 <li>
                     <a href="" class="fab fa-facebook"></a>
                     <a href="" class="fab fa-twitter"></a>
                     <a href="" class="fab fa-youtube"></a>
                 </li>
            </div>
            <center><font color="white"><p>Trụ sở chính: <br>
             279 Nguyễn Tri Phương, Phường 5, Quận 10<br>
             Thành phố Hồ Chí Minh<br>
             Liên hệ hỗ trợ: <b>0799778167</b>
             </p></font>
            </center>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6526865073474!2d106.66625811428689!3d10.761227762417896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee4ecfa255d%3A0x9e5ec3fa6801b7d6!2zMjc5IE5ndXnhu4VuIFRyaSBQaMawxqFuZywgUGjGsOG7nW5nIDUsIFF14bqtbiAxMCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1650278879233!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    
    </div> <!--(Div tổng)-->
    <style>
        @media only screen and (max-width: 740px){
            .wall-header_title{
                display:none;
            }
        }
        .list-group-item .checkbox a: hover{color: #FF5F17}
                            .checkbox a: active{color: #FF5F17}
    </style>
</body>
</html>