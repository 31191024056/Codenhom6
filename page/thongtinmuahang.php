<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- <title>Kết quả đặt hàng</title> -->
<!--HEADER-->
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <title> | Thông tin mua hàng</title>
    <link rel="shortcut icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/277691332_1002053574027888_7782645681973856683_n.png?stp=dst-png_s206x206&_nc_cat=105&ccb=1-5&_nc_sid=aee45a&_nc_ohc=5MSCPqhiyiwAX8_0G7N&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLgyRiBRTEcKgYxhYUSApM3pqO0Z4oRBB0D1O3q39pKGA&oe=62815A7A" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" >
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="ctsp.css">	 -->
</head>
    <body>
<div class="fullcontent-fluid">
    <?php
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien=0;
        // $ship= 15000;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;      
    ?>   

<form action="page/xuly/xulydonhang.php" method="POST">
<div class="content-dathang" >    
    <div class="tongnd">
        <div class="noidung">
            <div class="thongtin-left">
            <!-- <h1 class="tt">Thông Tin Đặt Hàng</h1> -->
            <!-- <hr class="hr1" align="center" color="#32a852"/> -->
                <h2 style="font-size: 30px;">Thông tin khách hàng</h2>
                <hr>
                <div class="field-1">
                    <label for="">Họ và tên*</label> <br>
                    <input type="text" name="hoten" placeholder="Họ và tên*">
                </div>
                <div class="field-2">
                    <label for="">Điện thoại*</label> <br>
                    <input type="text" name="sdt" placeholder="Số điện thoại*">
                </div>
                <div class="field-3">
                    <label for="">Địa chỉ*</label> <br>
                    <input type="text" name="diachi" placeholder="Địa chỉ">
                </div>
                <div class="field-3">
                    <label for="">Email</label> <br>
                    <input type="text" name="email" placeholder="Nhập email để được giảm 10% giá trị sản phẩm">
                </div>
                <div class="field-4">
                    <label for="">Ghi chú</label> <br>
                    <input type="text" name="note" placeholder="Yêu cầu khác (không bắt buộc)">
                </div>
            </div>
<!-- Thông tin sản phẩm -->
            <div class="chitiet-tong" >
                <div class="donhang" ><h2><b>Chi tiết đơn hàng </b></h2></div>
                <hr>
                <div class="chitietdonhang">
                    <div class="show-donhang">        
                        <div class="product-card1">
                            <div class="product-imgfull">
                                <div class="product-img">
                                    <img src="<?php echo $cart_item['hinhanh'] ?>" width="100%">
                                </div>
                            </div>            
                            <div class="product-thongtin">
                                <a href="" style="text-decoration:none;"><?php echo $cart_item['tensanpham'] ?></a> <br> 
                                Size: <?php echo $cart_item['size'] ?><br>
                                Số lượng: <?php echo $cart_item['soluong'] ?>               
                            </div>
                            <div class="gia"><?php echo number_format($cart_item['giasp'],0,',','.') ?> VNĐ</div>
                        </div>
                        <hr>     
                    </div>  
                </div>
                <hr>  

                <div class="tinhtong">             
                    
                    <div class="boder1">     
                        <div class="chitiet1"><h4>Giá tạm tính:</h4></div>          
                        <div class="gia1"><?php echo number_format($tongtien,0,',','.') ?> VNĐ</div> 
                    </div>    
                            
                    <div class="boder1">     
                        <div class="chitiet1"><h4>Phí vận chuyển:</h4></div>          
                        <div class="gia1">Miễn phí</div>    
                    </div>  
                            
                    <div class="boder1">     
                        <div class="chitiet1"><h4>Phương thức chi trả:</h4></div>      
                        <div class="gia1">Thanh toán sau khi nhận hàng </div> 
                    </div> 
                    <?php
                            //dong foreach
                        }
                        $tongtienfinal = $tongtien;
                    ?>               
                    <div class="boder1"> 
                        <div class="chitiet2"><h3><b>Tổng tiền: </b></h3></div>     
                        <div class="gia2"><h3><b><?php echo number_format($tongtienfinal,0,',','.') ?> VNĐ</b></h3></div>   
                    </div>   
                    <a href=""><div class="btn"><input class="btn-order"style="background-color: black; width: 80%; height: 50px; color: white; font-size: 18px;" 
                        type="submit" name="dathang" value="ĐẶT HÀNG"></input></div></a> 
                </div>

            </div>
        </div>
    </div>
</div> 
<?php
        //dong if
    }
?>
</form>

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


</div> <!-- (Div tổng) -->
    </body>

<style>  
   @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap');

    *{padding: 0; 
    margin: 0;
    font-family: 'Nunito Sans', sans-serif;
    }

/* --- */
.fullcontent-fluid{background: white; margin: 0px auto;width: 100%;}
.slide{background-color: white; width: 100%; height:688px; margin: 0 auto;}

/* --- */
 
    .tongnd{width:80%;margin:0 auto;}   
    .loicamon {width:100%;text-align:center;margin-bottom: 20px;}     
    .title-dathang{width:100%;display:inline-block; margin: 20px 0 10px 0;}
    .title-dathang h1{font-size: 50px; }
    .noidung{width:100%;display: flex; justify-content: space-between; padding-top: 50px; }

    /* thông tin khách hàng */
    .chitiet-tong {width: 50%;}
    .thongtinKH {width: 50%; }    
    .chitietKH{width:100%; text-align: center; }
    .title-KH{text-align: start;}
    .title-KH h2{font-size: 30px;}
    .KH{width:80%;font-size: 18px;}     
    .border{width:100%; display: inline;}
    .chitiet{float: left;}
    .gia0{text-align: right; }
    #trai {padding-left: 0px; }    
    .button-dathang{background-color:black;border:none; width:50%;height:50px; margin: 20px 0 0 70px; }
    .button-dathang:hover{background: rgb(291,94,44);}
    .btn button{color: #F15E2C;text-align: center;border: 1px solid;border-radius: 0.25rem;transition: 0.15s;background-color: white;height: 40px;width: 125px;font-weight: bold; cursor: pointer;}
    .btn button:hover{color: aliceblue;background-color: #F15E2C;}
    .btn{text-align: right;padding-top: 10px;}
    /* thông tin sản phẩm */            
    .chitiet-tong {width: 50%;}
    .donhang, .chitietdonhang{width:100%;}    
    .donhang h2{font-size: 30px;}  
    .show-donhang {
        width: 100%;
        margin-top: 20px; 
        font-size: 17px;            
    }
    .product-card1 {width:100%;display:flex;justify-content: space-between;flex-wrap: wrap; margin-bottom: 10px; }
    .product-imgfull{width:20%; }      /*(chính) */          
    .product-thongtin {width:50%; flex-wrap: wrap;}    /*(chính) */
    .product-thongtin a:hover {color: #FF5F17;text-decoration: none;}          
    .product-thongtin a {       
        font-size: 18px;
        color: black;
        font-weight: bold;
    }
    .product-thongtin h3 {font-size: 16px; color: black;}       
    .gia{ width:25%; text-align: right;}  /*(chính) */
    .gia h4{font-size: 20px;}

    /* tính tổng */
    .tinhtong{width:100%; margin: 15px 0 30px 0;}        
    .border1{width:100%; display: inline;}
    .chitiet1{float: left;font-size: 20px;}
    .gia1{text-align: right;font-size: 20px; } 
    .chitiet2{float: left;font-size: 25px;}
    .gia2{text-align: right;font-size: 25px; }
/* ----thong tin left---- */
/* h1{
    font-weight: bold;
    padding-bottom: 5px;
} */
/* h2{
    font-weight: bold;
} */
.thongtin-left{
    width: 50%;
    padding-right: 50px;
}
/* .hr1 .hr2{
    width: 100%;
    height: 2px;
    color: #F15E2C;
    align-items: center;
    font-weight: bold;
} */
h2{
    font-weight: bold;
    margin: 0px 0px 10px;
    padding: 10px 0px;
}
label{
    font-size: 18px;
    margin: 0px 0px 8px; 
}

/* .thongtin-right{
    width: 50%;
    padding-top: 48px;
} */
.field-1 label{
    font-weight: bold;
}
.field-2 label{
    font-weight: bold;
}
.field-3 label{
    font-weight: bold;
}
.field-4 label{
    font-weight: bold;
}

.field1 input{
    /* color: #F15E2C; */
    border-radius: 50%;
    height: 50px;
}

.field-1 input{
    width: 100%;
}
.field-2 input{
    width: 100%;
}
.field-3 input{
    width: 100%;
}
.field-4 input{
    width: 100%;
}
.field1 span b{
    color: #F15E2C;
}
.field2 span b{
    color: #F15E2C;
}
.field2 ul li p{
    padding-bottom: 10px;
}
/* .field-1 .field-2 .field-3 .field-4 input{
    width: 100%;
    border-radius: 4px;
    border: 1px solid rgba(54,54,54,0.7);
    padding: 8px 15px;
} */
.field-1{
    padding-top: 15px;
    padding-bottom: 10px;
}
.field-2{
    padding-bottom: 10px;
}
.field-3{
    padding-bottom: 10px;
}
.field-4{
    padding-bottom: 10px;
}
.field-1 .field-2 .field-3 .field-4 label{
    font-weight: bold;
}

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

    /* FOOTER */
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

/* //////////////////////////////// */
/* Note Desktop: loại bỏ khoảng cách trống dưới header */
@media only screen and (min-width: 1024px){
    .row2{display: none;}
    li.active{display: none;}
}   
    </style>


    <!--  Responsive  -->

    <style>
@media only screen and (max-width: 1024px) {
    
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
  /* FOOTER */
  .map{display: none;}
  .footer-left{display: none;}
  .footer{align-items: center;height: 500px;width: 100%;}
  .footer-center{width: 100%;}
  .app{ margin: 0;padding: 0; width: 100%; height: 45%;}
  .ThongTin{padding-top: 0;}
  .ThongTin li{padding: 10px;}
  .pay-btn{padding-top: 5px;}
  /* ---- */
  /* NOI DUNG */
    .content-dathang {
        width: 95%;
        margin: 0 auto;
    }        
}

    /* MOBILE: */
@media only screen and (max-width: 740px){
  /* HEADER */
  .row1{display:block;width:100%;height: 65px;flex-direction: column;align-items: flex-start;}
    .material-icons{font-size: 200%;padding-left: 12%;padding-top:6%;}
    .countProduct{font-size:50%}
    .material-icons-outlined{font-size:2rem;color:white}
    .navbar-danhmuc{padding-top:25%;padding-left: 30%}
    .collapse{position: fixed;top: 0;bottom: 0;right: 0;width: 50%;max-width: 100%;background-color: #555;transform: translateX(100%);transition: transform linear 0.2s;}
    .row2{background-color: black;width:100%;height: 30px;text-align: center;font-size: 50%;}
    .boxsearch{position: fixed;top:65px;left: 32%;background-color: white;border-radius: 30px;width: 50%;height: 35px;border-style: solid;border-color: #f15e2c;transform: translateY(-390%);}
  /* FOOTER */
  .map{display: none;}
  .footer-left{display: none;}
  .footer{align-items: center; padding-top: 50px; width: 100%; height: 500px; }
  .footer-center{width: 100%;}
  .app{margin: 0;padding: 0; }
  .apply1{ padding-top: 5px; padding-bottom: 5px;}
  .input-group-btn button{padding-top: 5px;}
  .ThongTin{ padding-top: 0 }
  .pay-btn{padding-top: 5px}
  /* --- */

    /* NOI DUNG */
    
    .title-dathang h1{font-size: 40px;}
    /* thông tin khách hàng */
    .noidung{display: block; width: fit-content;}
    .thongtinKH{width:100%; flex-wrap: wrap;}     
    .title-KH{text-align: center;}
    .KH{width:100%;  text-align: center;}           
    .border{display: inline-block;}
    .gia0{flex-wrap: wrap;}    
    .button-dathang{display:inline-block; margin-bottom: 20px;}
      
      /* thông tin sản phẩm */            
    .chitiet-tong {width:100%; padding-left: 0 auto;}         
    .product-img { padding-right: 0;}
    /* Tinh tong */
    .chitiet2, .gia2{font-size: 23px; }

    .thongtin-left{width: 100%;}
} 
    
</style>
</html>