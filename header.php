<div class="header1">
            <ul class="menu">
               
                <li><a style="text-decoration: none" href=""><font size="2" color="white" face="Arial">Trợ giúp</font></a></li>
                <li><a style="text-decoration: none"href=""><font size="2" color="white" face="Arial">Tìm cửa hàng</font></a></li>
            </ul>
        </div>
        <div class="header2">
            <div class="header2-left">
                <div class="brand"><a href="index.php"><img src="page/img/logo.png" width="200px" height="150px"></a></div>
            </div>
            <div class="header2-center">
                <ul class="mucluc">
                    <li><a style="text-decoration: none" href="index.php?site=dssanpham&id=1"><b><font size="6rem" color="black">Giày Nam</font></b></a></li>
                    <li><a style="text-decoration: none" href="index.php?site=dssanpham&id=2"><b><font size="6rem" color="black">Giày Nữ</font></b></a></li>
                    <li><a style="text-decoration: none" href="index.php?site=dssanpham&id=3"><b><font size="6rem" color="black">Phụ Kiện</font></b></a></li>
					<!-- <li><a style="text-decoration: none" href=""><b><font size="6rem" color="black">Nổi Bật</font></b></a></li>--> 
                </ul>
            </div>

            <!-- TIM KIEM -->

            <div class="header2-right" >
                <form action="index.php?site=timkiem" method="POST">
                    <input class="search-text" type="text" name="tukhoa" placeholder="  nhập từ khóa..." style="height: 30px;
                    border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;
                        border-top-right-radius: 20px; border-top-left-radius: 20px;">
                    <input class="search-button" type="submit" name="btn" value="Tìm kiếm" style="height:33px; 
                        background-color:black ; width: 80px; border-bottom-right-radius: 50px; border-bottom-left-radius: 50px;
                        border-top-right-radius: 50px; border-top-left-radius: 50px; color: white;">
                </form>               
            </div>

            <!-- ===================== -->

            <div class="menu2">
                <ul class="mn2">
                    <li><a style="text-decoration: none" href="index.php?site=giohang"><i class="material-icons">shopping_bag</i></a></li>
                    <li><a style="text-decoration: none" href=""><i class="material-icons">favorite</i></a></li>
                </ul>
            </div>
        </div>
        <div class="header3">
            <font size="2" color="white" >Miễn Phí Giao Hàng</font>
        </div>
        <!-- Header Responsive -->
        <div class="row1">
                <!-- header2 -->
            <div class="navbar-header">    
                <div class="navbar-header-left">
                <div class="col-xs-4 col-sm-4 navbar-brand"><a href="index.php"><img src="page/img/logo.png" width="70%" height="90%"></a></div> 
                </div>
                <div class="col-xs-5 col-sm-6 navbar-menu">
                    <label for="input-timkiem"> <i class="material-icons" >search</i></label>  
                    <a style="text-decoration: none" href=""><i class="material-icons" >favorite</i></a>
                    <a style="text-decoration: none" href="index.php?site=giohang"><i class="material-icons" >shopping_bag</i>
                        <!-- <span class="navbar-menu-count">(<span  class="countProduct" >2</span>)</span> -->
                    </a>
                </div>
                <input type="checkbox" hidden name=""  class="input-tk" id="input-timkiem">
                <label for="input-timkiem" class="overlay"></label>
                <div class="boxsearch">
                <input class= "timkiem" type="text" placeholder="Tìm kiếm sản phẩm..."/>
                </div>
            </div>
            <label for="input-danhmuc" class="navbar-header-right">
                <div class="col-xs-3 col-sm-2 navbar-danhmuc"><i class="material-icons-outlined" >menu</i></div>
            </label>
             <input type="checkbox" hidden name=""  class="input-dm" id="input-danhmuc">
            <label for="input-danhmuc" class="overlay"></label>
            <div class="collapse">
                <label for="input-danhmuc" class="menu-close"><i class="material-symbols-outlined" style="color: #fff;font-size: 150%">close</i></label>
                <ul class="mobile_menu_list"> 
                    <li><a href="index.php?site=dssanpham&id=1" class="mobile_menu_link">Giày Nam</a></li>
                    <li><a href="index.php?site=dssanpham&id=2" class="mobile_menu_link">Giày Nữ</a></li>
                    <li><a href="index.php?site=dssanpham&id=3" class="mobile_menu_link">Phụ Kiện</a></li>
                    <!-- <li><a href="" class="mobile_menu_link">Nổi Bật</a></li>             -->
                    <li><a href="" class="mobile_menu_link"><i class="material-symbols-rounded">where_to_vote</i>Tìm cửa hàng</a></li>
                    <li><a href="" class="mobile_menu_link"><i class="material-symbols-rounded">help</i>Trợ giúp</a></li>
                </ul>
            </div>
        </div>
        <div class="row2">
              <br>  <font  color="white"">Miễn Phí Giao Hàng Cho Hóa Đơn Trên 5.000.000VND</font></br>
        </div>
        <!-- end header responsive -->

<style>
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

@media only screen and (max-width: 1024px){
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
}

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
}
  </style>