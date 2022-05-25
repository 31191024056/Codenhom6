<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/277691332_1002053574027888_7782645681973856683_n.png?stp=dst-png_s206x206&_nc_cat=105&ccb=1-5&_nc_sid=aee45a&_nc_ohc=5MSCPqhiyiwAX8_0G7N&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLgyRiBRTEcKgYxhYUSApM3pqO0Z4oRBB0D1O3q39pKGA&oe=62815A7A">
    <meta charset="utf-8">
    <title> | Trang Chủ</title>
	<!--  -->
    <link rel="stylesheet" href="page/TrangChu.css">
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
    <div class="fullcontent-fluid">
        <!-- Header -->
    <?php
    include("admincp/config/config.php");

    ?>    
        <!-- SLIDESHOW -->
        <div class="slide" style="width: 100%; height: auto;">       
            <div class="img">
                <img src="https://ananas.vn/wp-content/uploads/Vintas-Temperate_desktop.jpg" alt="Slide1" width="100%" height="100%" margin="0px auto">
            </div>
        </div>
        <!-- THÂN TRANG --> 
        <div class="ThanTrang">
            <!-- 2 hình ảnh dưới slide --------------------------------->
            <!-- <section class="DacBiet">                
                <div class = "DacBiet-img"  id="fix">
                    <img src="page/img/ShoesByYou.png" width="100%" height="auto">
                    <div class="DanhMuc-cachtrong"></div>
                    <div class="DacBiet-thongtin">
                        <a href="">SHOES BY YOU</a>
                        <h3>Hãy custom giày theo phong cách riêng của bạn</h3>
                    </div>
                    <button>Khám Phá Ngay</button>
                </div>
                <div class = "DacBiet-img">
                    <img src="page/img/FreshFootwear.png" width="100%" height="auto">
                    <div class="DanhMuc-cachtrong"></div>
                    <div class="DacBiet-thongtin">
                        <a href="">FRESH FOOTWEAR</a>
                        <h3>Sneaker trắng đã trở lại cho mùa xuân tươi mát</h3>
                    </div>
                    <button>Khám Phá Ngay</button>
                </div>
            </section> -->
            <!-- <br style="clear: both"> -->
            <!--  -->
            <!-- Danh mục Sản Phẩm -->
            <div class="show-product-space"></div>
            <div class="show-product-title">
                <h1>Danh Mục Sản Phẩm</h1>
                <!-- <h1>Cho tất cả đơn hàng trên 500k</h1> -->
            </div>
            <section class="DanhMuc">                
                <div class = "DanhMuc-card" id="fix">
                    <img src="https://ananas.vn/wp-content/uploads/Menu_Nam.jpg" width="100%" height="auto">
                    <div class="DanhMuc-cachtrong"></div>
                    <div class="DanhMuc-thongtin">
                        <a href="index.php?site=dssanpham&id=1">GIÀY NAM</a>
                    </div>
                    <a href="index.php?site=dssanpham&id=1"><button>Shop Now</button></a>
                </div>                  
                <div class = "DanhMuc-card">
                    <img src="https://ananas.vn/wp-content/uploads/Menu_Nu.jpg" width="100%" height="auto">
                    <div class="DanhMuc-cachtrong"></div>
                    <div class="DanhMuc-thongtin">
                        <a href="index.php?site=dssanpham&id=2">GIÀY NỮ</a>
                    </div>
                    <a href="index.php?site=dssanpham&id=2"><button>Shop Now</button></a>
                </div>
                <div class = "DanhMuc-card">
                    <img src="https://ananas.vn/wp-content/uploads/Menu_Phu-kien.jpg" width="100%" height="auto">
                    <div class="DanhMuc-cachtrong"></div>
                    <div class="DanhMuc-thongtin">
                        <a href="index.php?site=dssanpham&id=3">PHỤ KIỆN</a>
                    </div>
                    <a href="index.php?site=dssanpham&id=3"><button>Shop Now</button></a>
                </div>
            </section>
            <!--  -->
            <!-- Show sản phẩm 1 -->
            <div class="show-product-space"></div>
            <div class="show-product-title">
                <h1>Sản Phẩm Giày Nam</h1>
                <!-- <h1>Cho tất cả đơn hàng trên 500k</h1> -->
            </div>
            <section class="show-product2">
            <?php
                $sql_goiy = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
                And tbl_danhmuc.id_danhmuc=1 ORDER BY RAND() LIMIT 4";
                $query_goiy = mysqli_query($mysqli, $sql_goiy);
                while($row_goiy = mysqli_fetch_array($query_goiy)){
            ?>
                <div class="product-card2">
                    <a href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>" >
                        <div class="product-img">
                            <img src="<?php echo $row_goiy['img_link']?>" width="100%">
                        </div>
                        <div class="product-cachtrong"></div>
                        <div class="product-thongtin">
                            <a style=" font-weight: bold;" href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>">
                            <?php echo $row_goiy['tensanpham']?></a>
                            <h4><?php echo number_format($row_goiy['price'],0,',','.')?> VNĐ</h4>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>               
            </section>
            <a style="float:right; text-decoration:none;" href="index.php?site=dssanpham&id=1">Xem thêm...</a>
            <!-- Show sản phẩm 2 -->
            <div class="show-product-space"></div>
            <div class="show-product-title">
                <h1>Sản Phẩm Giày Nữ</h1>
                <!-- <h1>Cho tất cả đơn hàng trên 500k</h1> -->
            </div>
            <section class="show-product2">
            <?php
                $sql_goiy = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc And tbl_danhmuc.id_danhmuc=2 ORDER BY RAND() LIMIT 4";
                $query_goiy = mysqli_query($mysqli, $sql_goiy);
                while($row_goiy = mysqli_fetch_array($query_goiy)){
            ?>
                <div class="product-card2">
                    <a href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>" >
                        <div class="product-img">
                            <img src="<?php echo $row_goiy['img_link']?>" width="100%">
                        </div>
                        <div class="product-cachtrong"></div>
                        <div class="product-thongtin">
                            <a href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>"><?php echo $row_goiy['tensanpham']?></a>
                            <h4><?php echo number_format($row_goiy['price'],0,',','.')?> VNĐ</h4>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>             
            </section>
            <a style="float:right; text-decoration:none;" href="index.php?site=dssanpham&id=2">Xem thêm...</a>
            <!-- Show sản phẩm 3 -->
            <div class="show-product-space"></div>
            <div class="show-product-title">
                <h1>Sản Phẩm Phụ Kiện</h1>
            </div>
            <section class="show-product2">
            <?php
                $sql_goiy = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc And tbl_danhmuc.id_danhmuc=3 ORDER BY RAND() LIMIT 4";
                $query_goiy = mysqli_query($mysqli, $sql_goiy);
                while($row_goiy = mysqli_fetch_array($query_goiy)){
            ?>
                <div class="product-card2">
                    <a href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>" >
                        <div class="product-img">
                            <img src="<?php echo $row_goiy['img_link']?>" width="100%">
                        </div>
                        <div class="product-cachtrong"></div>
                        <div class="product-thongtin">
                            <a href="index.php?site=chitietsp&id=<?php echo $row_goiy['id_sanpham']?>"><?php echo $row_goiy['tensanpham']?></a>
                            <h4><?php echo number_format($row_goiy['price'],0,',','.')?> VNĐ</h4>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>             
            </section>
            <a style="float:right; text-decoration:none;" href="index.php?site=dssanpham&id=3">Xem thêm...</a>
            <!-- Báo: the brand journal------------------------------------->
            <article>
                <h3>Mẫu Tin Nho Nhỏ</h3>
                <div class = "show-news">
                    <div class="news-card" id="fix">
                        <div class="news-img">
                            <img src="https://ananas.vn/wp-content/uploads/Mobile_Blog-1980s_0-300x160.jpg"width="100%">
                        </div>
                        <div class="news-cachtrong"></div>
                        <div class="news-thongtin">
                            <a href="">Top các mẫu Dây Giày SNEAKER chất nhất năm 2021</a>
                        </div>
                    </div>
                    <!-- <div class="article-space"></div> -->
                    <div class="news-card">
                      <div class="news-img">
                          <img src="https://ananas.vn/wp-content/uploads/kvngang_mobile_web-300x160.jpg"width="100%">
                      </div>
                      <div class="news-cachtrong"></div>
                      <div class="news-thongtin">
                          <a href="">Top các mẫu Dây Giày SNEAKER chất nhất năm 2021</a>
                      </div>
                  </div>
                    <!-- <div class="article-space"></div> -->
                    <div class="news-card">
                      <div class="news-img">
                          <img src="https://ananas.vn/wp-content/uploads/peeping_pattas01-300x160.jpg"width="100%">
                      </div>
                      <div class="news-cachtrong"></div>
                      <div class="news-thongtin">
                          <a href="">Top các mẫu Dây Giày SNEAKER chất nhất năm 2021</a>
                      </div>
                  </div>
                    <!-- <div class="article-space"></div> -->
                    <div class="news-card">
                      <div class="news-img">
                          <img src="https://ananas.vn/wp-content/uploads/shoes-anatomy-thumbnail-300x160.jpg"width="100%">
                      </div>
                      <div class="news-cachtrong"></div>
                      <div class="news-thongtin">
                          <a href="">Top các mẫu Dây Giày SNEAKER chất nhất năm 2021</a>
                      </div>
                  </div>
                </div>
            </article>
            <!-- <br style="clear: both"> -->
        </div>
        <!-- Kết thúc THÂN TRANG -->
        
        <!-- 3 cột sản phẩm khó nhằng cuối cùng :(((( ------------------------------->        
        <div class="container-fluid-3cotSP">
            <div class="cach-trong"></div>
            <div class="container-3cotSP">
                <div class="cotSP">
                    <div class="cotSP-title">
                        <h3>ON SALE</h3>
                        <hr>
                    </div>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://mcdn.coolmate.me/image/September2021/giay-sneaker_28.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Basas Bumper Gum EXT NE - High Top</a>
                            <br />
                            <h4><del>720.000đ</del> 690.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://salt.tikicdn.com/ts/product/c2/59/7f/1ce2d8bd9733228ed2309625b6779a1d.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Basas Bumper Gum EXT Ne - High Top</a>
                            <br />
                            <h4><del>590.000đ</del> 499.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://api.giay.store/storage/products/avatar/1372.jpg?v=1635228399" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Long Denim Trench Coat With Belt</a>
                            <br />
                            <h4><del>680.000đ</del> 589.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                </div>
                <div class="cotSP-space"></div>
                <div class="cotSP">
                    <div class="cotSP-title">
                        <h3>OUR PICKS</h3>
                        <hr>
                    </div>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://vn-test-11.slatic.net/p/7663587d284a8953f3d818a1e51fdd9a.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Basas Bumper Gum EXT Ne - High Top</a>
                            <br />
                            <h4>720.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://salt.tikicdn.com/ts/product/58/42/f0/2f10d138d83e4c2df38163ce0800501a.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Long Denim Trench Coat With Belt</a>
                            <br />
                            <h4>510.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://img.mwc.com.vn/giay-thoi-trang?&w=450&h=450&FileInput=//Upload/2022/01/z3141742037480-de5ce9fb2302b6986e926b3b15dc4d53.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Basas Bumper Gum EXT NE - High Top</a>
                            <br />
                            <h4>430.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                </div>
                <div class="cotSP-space"></div>
                <div class="cotSP">
                    <div class="cotSP-title">
                        <h3>TOP RATED PRODUCTS</h3>
                        <hr>
                    </div>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://dqshop.vn/wp-content/uploads/2021/03/giay-gucci-son-tung-nam-nu-rep-11-dep-chat-6.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Long Denim Trench Coat With Belt</a>
                            <br />
                            <h4>690.000đ</h4>
    
                        </div>
                        <br style="clear: both">
                    </div>
    
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://cdn.tgdd.vn/Products/Images/9980/248009/skechers-goodyear-dlites-4-0-sport-casual-237225-den-thumb-600x600.jpg" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="chitietSP.html">Long Denim Trench Coat With Belt</a>
                            <br />
                            <h4><del>740.000đ</del> 680.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                    <hr>
                    <div class="sanpham">
                        <div class="sanpham-img">
                            <img src="https://cdn.shopify.com/s/files/1/1404/4249/products/GZD66_Den_2_300x.jpg?v=1640578130" width="65px" height="80px">
                        </div>
                        <div class="sanpham-name">
                            <a href="">Basas Bumper Gum EXT Ne - High Top</a>
                            <br />
                            <h4>650.000đ</h4>
                        </div>
                        <br style="clear: both">
                    </div>
                </div>
                <br style="clear: both">
            </div>
        </div>
        <!-- ----- -->
        <!-- <br style="clear: both"> -->
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

    </div>  <!-- kết thúc fullcontent-fluid (cả trang-full)-->
<style>
    .show-product2 {
        margin-top:20px;
        width: 100%;     
        display: flex;   
        justify-content: space-between;
        flex-wrap: wrap;   
        }
        .product-card2 {
            width: 24%;
            float: left;
            margin-bottom: 10px;             
        }    
    
@media only screen and (max-width: 740px){
    .DanhMuc-thongtin a{
        font-size: 20px;
    }
    .show-product2 {
        flex-wrap: wrap;
    }
    .product-card2 {
        width: 49%;        
    }  
}
</style>


</body>
</html>










