<div class="menu">
<div>
<a href="index.php">
    <img  class ="mySlider"src="photo/logo 2.png" width="190px" height="80px" >
</a>
       </div>
       <ul class="list_menu">
           <li><a href="index.php" style="color: black;">Trang Chủ</a></li>
           <li><a href="./indexs.php?quanly=danhmucsp&id=1" style="color: red;">Hot</a></li>
           <li><a href="./indexs.php?quanly=ao" style="color: black;">Áo</a></li>
           <li><a href="./indexs.php?quanly=quan" style="color: black;">Quần</a></li>
           <li><a href="./indexs.php?quanly=phukien" style="color: black;">Phụ Kiện</a></li>
            <li><a href="chitiet.php?quanly=tintuc" style="color: black;">Tin tức <i class="far fa-newspaper "></i></a></li>
       </ul>
       <div>
       <a style="text-decoration: none;" class="giohang_css" href="./chitiet.php?quanly=giohang"><i style="color:black;" class="fas fa-cart-plus fa-2x"></i>
       <?php
    if(isset($_SESSION['dangky'])){
    ?>  
       <?php
                        if(isset($_SESSION['cart'])){
                            $soluongsanpham=0; 
                            foreach($_SESSION['cart'] as $cart_item){
                            $soluongsanpham+=$cart_item['soluong'];}
                            ?><?php  echo '  <span style="color:white;" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">'.$soluongsanpham?>
 <?php 
 }
 ?>
<?php   
}else{
}      
?>  
</a>  
</div>
</div>
  
 