<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Deer - Giỏ hàng</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="file:///C:/Users/Admin/Pictures/deer.png" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" >
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
<div class="fullcontent-fluid">
    <?php
        if(isset($_SESSION['cart'])){
                //print_r($_SESSION['cart']);
        }
    ?>
<!-- ///// -->
<!-- <form action="index.php?site=thongtindathang" method="POST">    -->
    <!-- GIO HANG -> thongtinsp --> 
        <div class="title">
            <center><br><header class="entry-header"> 
                <h1><font size="8" >Giỏ Hàng</font></h1> </header></br></center>
        </div><br> <br>
    <?php
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;      
    ?>
        <div class="blank1"></div>
        <div class="container">
            <div class="product1">
                <div class="product-info">
                    <div class="SanPham">
                        <div class="hinhSP">
                            <img class="sp1" src="<?php echo $cart_item['hinhanh'] ?>" height="auto" width="85%" data-holder-rendered="true">
                        </div>
                        <div class="media-body">
                            <p><b><font size="4" ><?php echo $cart_item['tensanpham'] ?></font></b></p>
                            <span class="saleoff"><strong><font size="3" color="gray">Giá:</strong></font> <font size="3" color="gray"><?php echo number_format($cart_item['giasp'],0,',','.') ?> VNĐ</font></span>
                            <div class="row-bottom">
                                <div class="size">
                                    <h5>Size: </h5>                                
                                    <input type="number" name="size" min="35" max="43" value="<?php echo $cart_item['size'] ?>" style="width:80px;" >            
                                </div>
                                <div class="soluong">
                                    <p style="font-weight: bold;">Số lượng: </p>
                                    <input type="number" name="soluong" min="0" max="10" value="<?php echo $cart_item['soluong'] ?>" style="width:80px;" >
                                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Tong">
                        <p><center><b><font size="5" color="orange" ><?php echo number_format($thanhtien,0,',','.') ?> VNĐ</font></b></center></p>
                        <p><center><font size="2" color="orange">Còn hàng</font></center></p>
                        <br><center><button type="button" class="like" style="width:100px; height: 30px">Yêu Thích</button></center></br>
                        <a href="page/xuly/themgiohang.php?xoa=<?php echo $cart_item['id']?>"><br><center><button type="button" class="delete" style="width:100px; height:30px"><font color="white">Xóa</font></button></center></br></a>
                    </div>
                </div>
                <hr width="100%" size="2px" color="gainsboro" />
            </div>
        </div>
    <!-- end GIO HANG -> thongtinsp -->     
    <?php
            //đóng foreach
        }
    ?>
    <!-- DON GIA -> tongtien -->
        <div class="dongia">
            <br> <b><font size="5" face="Arial">ĐƠN GIÁ</font> </b></br> 
            <hr width="100%" color="black" size="2"/>
            <div class="voucher">
                   <br><b><font size="3" face=" Arial">NHẬP MÃ KHUYẾN MÃI</font></b></br>
                 <br>  <input type="text" class="form-control text-uppercase" value="" style="height: 33px; width: 65%;"> 
                      <span class="input-group-btn">
                        <button class="apply" type="button"><font color="white">ÁP DỤNG</font></button>
                      </span> <br>
                     <br> <hr width="100%" color="gainsboro" size="2px"/> </br>
            </div>
            <div class="precal">
                <div class="precal-left">
                <p><b><font size="3"  color="gray">Đơn hàng</font></b></p>
                <p><b><font size="3"  color="gray">Đã giảm</font></b></p>
               </div>
               <div class="precal-right">
                <p style="text-align:right"><b><font size="3"  color="gray"><?php echo number_format($tongtien,0,',','.') ?> VNĐ</font></b></p>
                <p style="text-align:right"><b><font size="3"  color="gray">0 VNĐ</font></b></br>
                </div>
                <hr size="2" color="gainsboro" width="100%"/>
            </div>
            <div class="tamtinh">
             <div class="tamtinh-left">
             <p><b><font size="4" >TẠM TÍNH</font></b></p>
             </div>
             <div class=" tamtinh-right">
             <p style="text-align:right"><b><font size="4" style="text-align:right"><?php echo number_format($tongtien,0,',','.') ?> VNĐ</font></b></p>
             </div>
             <br style="clear: both">
             <div class="tamtinh-bot">
                <a href="index.php?site=thongtinmuahang"><center><b><button class="thanhtoan" type="button"><font color="white">TIẾP TỤC MUA HÀNG</font></button></b></center></a>
             </div>
            </div>
        </div>
        <div class="blank2"></div>
        <br style="clear: both">
    <!-- end DON GIA -> tongtien -->
    <?php
    }else{
    ?>
    <!-- lenh html trong the else-->
        <p style="text-align:center; font-size: 25px;">Rất tiếc! Giỏ hàng hiện tại đang trống!</p> <br> <br>
    <?php
    }
    ?>
    
<!-- </form> -->
    <!-- END ALL GIO HANG -->









		<!-- ------------------------------------------ footer ------------------------------------- -->
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
    </div>
    
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap');
    *{padding: 0; margin: 0;font-family: 'Nunito Sans', sans-serif;}
    .fullcontent-fluid{background: white; margin: 0px auto}
    /*HEADER*/
    .header1{background-color: black;width: 100%;height: 40px}
    .header1 ul{list-style-type: none; text-align: center;height: 40px;overflow: none;}
    .header1 li{width: 110px;height: 30px;float: right;padding-right: 5px;padding-top: 10px;cursor: pointer;}
    .header1 li a{color:white}
    .header1  li a:hover{color:rgb(291,94,44);}
    .header2{background-color: rgb(231, 230, 230);width: 100%;height: 150px;}
    .header2-left{background-color: white;width:20%;height:150px;float:left}
    .brand{width: 74%;height: 100px;padding-left: 11%;padding-right: 3%;cursor: pointer;}
    .header2-center{background-color: white;width:50%;height:150px;float: left;}
    .header2-center ul{list-style-type: none; overflow: none;}
    .header2-center li{width:25%;height: 100px;float: left;padding-top: 55px;cursor: pointer;}
    .header2-right{background-color:white;width: 20%;height:150px;float: left;position: relative;display: flex;flex-direction: row;align-items: center;}
    .menu2{background-color: white;width: 10%;height: 150px;float:left}
    .searchbox{position: relative;background-color: white;border-radius: 30px;width: 0px;height: 42px;transition: 0.5s;}
    .searchbox input{width:100%;background: transparent;border: none;outline: none;color: black; font-size: 15px;padding: 13px;}
    .searchbox input::placeholder{color: rgb(221, 221, 221);}
    .searchbtn{width:18px;height: 22px;border-radius: 50%;display: flex;align-items: center;justify-content: center;position: absolute;left:88%;box-shadow: 0 0 0 10px white;cursor: pointer;}
    .header2-right:hover>.searchbox{width: 100%;border-style: solid;border-color: black ;}
    .menu2 ul{list-style-type: none;overflow: none;}
    .menu2 li{width: 45%;height: 50px;float: right;padding-top: 60px;cursor: pointer;}
    .material-icons{color: black;}
    .header3{background-color: black;width: 100%;height: 25px;text-align: center;}
    .row1{display: none;}
    /*BODY*/
    .title{background-color: white;width: 100%; height: 100px;}
    .blank1{background-color: white;width: 10%; height: 550px ;float: left;}
    .container{background-color: white;width: 55%;height: 550px;float: left} 
    .product1{background-color: white;width: 100%;height: 240px}
    .product2{background-color: white;width: 100%;height: 240px}
    .product-infor{background-color: white;width: 100%;height: 200px}
    .SanPham{background-color: white;width: 71.5%;height: 200px;float: left;}
    .hinhSP{background-color: white;width: 40%;height: 200px;float: left}
    .media-body{background-color: white;width: 50%;height: 200px;float: left;margin-left: 15px;padding-top: 0px;}
    .row-bottom{background-color: white;width: 100%;height: 60px;padding-top: 20px;}
    .Tong{background-color:white;width: 28.5%;height: 220px;float: left;}
    .delete{background-color: black;border:none}
    .delete:hover{background:rgb(291,94,44);}
    .size{background-color: white;width: 50%;height: 100px;float: left}
    .soluong{background-color: white;width: 50%;height: 100px;float: left}
    .dongia{background-color: rgb(247, 247, 247);width: 25%;height: 450px;float:left;}
    .voucher{background-color: rgb(247, 247, 247);width: 95%;height: 30%;margin-left: 10px;margin-right: 10px;padding-top: 10px}
    .apply{background: black;width: 30%;height: 38px;border: none;}
    .apply:hover{background: #f15e2c;border: 0;}
    .precal{background-color: rgb(247, 247, 247);width: 95%;height: 21%;margin-left: 10px;margin-right: 2px;}
    .precal-left{background-color: rgb(247, 247, 247);width: 50%;height: 87%;float: left;padding-top: 10px;}
    .precal-right{background-color: rgb(247, 247, 247);width: 50%;height: 87%;float: left;padding-top: 10px;}
    .tamtinh{background-color: rgb(247, 247, 247);width: 95%;height: 30%;margin-left: 10px;margin-right: 10px;}
    .tamtinh-left{background-color:rgb(247, 247, 247);width: 50%;height: 30%;float: left;padding-top: 15px;}
    .tamtinh-right{background-color: rgb(247, 247, 247);width: 50%;height: 30%;float: left;padding-top: 15px}
    .tamtinh-bot{background-color: rgb(247, 247, 247);width: 100%;height: 40%;padding-top: 20px;}
    .thanhtoan{background-color: black;width: 80%;height: 50px;}
    .thanhtoan:hover{background: rgb(291,94,44);border: none;}
    .blank2{background-color: white;width: 10%;height: 550px;float: left}
    /* FOOTER*/
    .footer{background-color: rgb(76,76,76);width: 100%;height: 500px}
    .map{width: 23%;height:70%;float: left;padding-top: 75px;}
    .footer-center{background-color: rgb(76,76,76);width:50%; height: 100%;float:left}
    .footer-left{background-color:rgb(76,76,76) ;width: 23%;height: 60%;float: left;padding-top:150px;padding-left: 35px;}
    .container1{height: 70%;text-align: center;align-items: center;}
    .app{height: 75%;margin: 20px;}
    .app img{height: 50px;}
    .container1 p{line-height: 20px;letter-spacing: 1px;font-size: 18px;color: black;font-weight: bold;}
    .app p{padding-top: 10px;margin: 20px;border-radius: 15px;border: none;}
    .app input{height:38px;width: 250px;text-align: left;font-size: 15px;border:none}
    .apply1{background-color: black;border:none;width: 100px;height:38px}
    .apply1:hover{background: rgb(291,94,44);}
    .ThongTin{text-align: center;display: flex;justify-content: center;align-items: center;margin-bottom: 20px;}
    .ThongTin li {padding: 20px 12px; position: relative;list-style: none;font-weight: bold;}
    .ThongTin li:last-child a{color: white;padding: 0 5px;}
    .ThongTin{font-size: 18px;margin-top: -55px;}
    .ThongTin li a{color: white;}
    .ThongTin li a:hover{color: #F15E2C;}


     /*tablet*/
     @media only screen and (max-width:830px){
         /*header*/
        .header1,.header2,.header3{display: none;}
        .row1{display:block;width:100%;height: 135px;flex-direction: column;align-items: flex-start;}
        .navbar-header{width:83%;height:  100%;float: left;}
        .navbar-header-left{width: 35%;height: 100%;float: left;}
        .navbar-brand{width: 80%;height: 80%;padding-left: 30%;padding-top: 8%;}
        .navbar-menu{width: 65%;height: 100%;float: left;}
        .material-icons{padding-left: 15%;padding-top: 40px;font-size: 360%;}
		 .countProduct{font-size: 100%}
        .boxsearch{position: fixed;top:135px;left: 32%;background-color: white;border-radius: 30px;width: 50%;height: 42px;border-style: solid;border-color: #f15e2c;transform: translateY(-390%);}
        .boxsearch input{width:92%;background: transparent;border: none;outline: none;color: black; font-size: 15px;padding: 13px;}
        .boxsearch input::placeholder{color: rgb(221, 221, 221);}
        .navbar-header-right{background-color: #4c4c4c;width:17%;height: 100%;float: left;}
        .navbar-danhmuc{padding:25%;}
		.material-icons-outlined{font-size: 5rem; color:white}
        .collapse{position: fixed;top: 0;bottom: 0;right: 0;width: 30%;max-width: 100%;background-color: #555;transform: translateX(100%);transition: transform linear 0.2s;}
        .menu-close{position: absolute;font-size: 35px;color: #666;top:3%;right: 2%;}
        .mobile_menu_list{margin-top: 45%;list-style-type: none;}
        .mobile_menu_link {text-decoration: none;background-color: #555;color:#fff;display: block;padding:20px ;padding-left: 8px;font-size: 3;}
        .mobile_menu_link :hover{background-color: #F15E2C;}
		 .material-symbols-rounded{font-size:2rem}
        .input-dm:checked ~ .overlay{position: fixed;top: 0;bottom: 0;left: 0;right: 0;background-color: rgba(0,0,0,0.3);animation: fadein linear 0.2s;}
        .input-dm:checked ~ .collapse{transform: translateX(0%);}
        .input-tk:checked ~ .overlay{position: fixed;top: 0;bottom: 0;left: 0;right: 0;background-color: rgba(0,0,0,0.3);animation: fadein linear 0.2s;}
        .input-tk:checked ~ .boxsearch{transform: translateY(0%);}
        .row2{background-color: black;width:100%;height: 70px;text-align: center;font-size: 110%;}
		/*Body*/
		 .blank1{display: none}
		 .blank2{display: none}
		 .container{background-color: white;width: 100%;height: 270px;} 
		 .dongia{background-color: rgb(247, 247, 247);width: 100%;height: 450px;}
		}
		/*Footer*/
		.map{display: none;}
        .footer-left{display: none;}
        .footer{align-items: center;height: 500px;width: 100%;}
        .footer-center{width: 100%;}
        .app{ margin: 0;padding: 0; width: 100%; height: 45%;}
        .ThongTin{padding-top: 0;}
        .ThongTin li{padding: 10px;}
        .pay-btn{padding-top: 5px;}
     @keyframes fadein{
         from{opacity: 0;}
         to{opacity: 1;}
     }
	@media only screen and (max-width:600px){
		.row1{display:block;width:100%;height: 65px;flex-direction: column;align-items: flex-start;}
		.material-icons{font-size: 200%;padding-left: 12%;padding-top:6%;}
		.countProduct{font-size:50%}
		.material-icons-outlined{font-size:2rem;color:white}
		.navbar-danhmuc{padding-top:25%;padding-left: 30%}
		.collapse{position: fixed;top: 0;bottom: 0;right: 0;width: 50%;max-width: 100%;background-color: #555;transform: translateX(100%);transition: transform linear 0.2s;}
		.row2{background-color: black;width:100%;height: 30px;text-align: center;font-size: 50%;}
		.boxsearch{position: fixed;top:65px;left: 32%;background-color: white;border-radius: 30px;width: 50%;height: 35px;border-style: solid;border-color: #f15e2c;transform: translateY(-390%);}
		.map{display: none;}
        .footer-left{display: none;}
        .footer{align-items: center; padding-top: 50px; width: 100%; height: 500px; }
        .footer-center{width: 100%;}
        .app{margin: 0;padding: 0; }
        .apply1{ padding-top: 5px; padding-bottom: 5px;}
        .input-group-btn button{padding-top: 5px;}
        .ThongTin{ padding-top: 0 }
        .pay-btn{padding-top: 5px}
    </style>
    
</body>
</html>