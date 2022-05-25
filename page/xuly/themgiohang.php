<?php
// echo $_GET['idsanpham'];
session_start();
include('../../admincp/config/config.php');
//Xóa sản phẩm
if(isset($_SESSION['cart']) && $_GET['xoa']){
    $id=$_GET['xoa']; 
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('tensanpham'=> $cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$soluong+1, 
                    'giasp'=>$cart_item['price'], 'hinhanh' => $cart_item['img_link'], 'size' => $size);
        }
        $_SESSION['cart'] = $product;
        header('Location:../../index.php?site=giohang');
    }
}

//Them sanpham vao gio hang
if(isset($_POST['themgiohang'])){
    // session_destroy();
    $id=$_GET['idsanpham'];
    $size=$_POST['size'];
    $soluong=$_POST['soluong'];
    $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' ";
    $query= mysqli_query($mysqli,$sql);    
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product[]=array('tensanpham'=> $row['tensanpham'], 'id'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['price'],
            'hinhanh' => $row['img_link'], 'size' => $size);
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['card'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']==$id){
                    $product[]= array('tensanpham'=> $cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$soluong+1, 
                        'giasp'=>$cart_item['price'], 'hinhanh' => $cart_item['img_link'], 'size' => $size);
                    $found=true;
                }else{
                    $product[] = array('tensanpham'=> $cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$soluong, 
                        'giasp'=>$cart_item['price'], 'hinhanh' => $cart_item['img_link'], 'size' => $size);
                }
            }
            if($found==false){
                $_SESSION['cart']= array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
    }
    header('Location:../../index.php?site=giohang');
}
?>