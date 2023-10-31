<main class="catalog  mb ">

   <div class="boxleft">
      <div class="banner">
         <!-- Slideshow container -->
         <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
               <div class="numbertext">1 / 3</div>
               <img src="http://localhost/du_an_mau/view/img/anh0.jpg" style="width:100%">
               <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext">2 / 3</div>
               <img src="http://localhost/du_an_mau/view/img/anh1.jpg" style="width:100%">
               <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext">3 / 3</div>
               <img src="http://localhost/du_an_mau/view/img/anh2.jpg" style="width:100%">
               <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <br>

         <!-- The dots/circles -->
         <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
         </div>
      </div>

      <div class="items">
         <?php
         foreach ($spnew as $sp) {
            extract($sp);
            $hinh = $img_path.$img;
            $linksp = "index.php?act=sanphamct&idsp=".$id;
            echo '<div class="box_items">
            <div class="box_items_img">
            <a class="item_name" href="'.$linksp.'">
            <img src="'.$hinh.'" alt="">
            </a>
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="'.$linksp.'">'.$name.'</a>
            <p class="price">$'.$price.'</p>
            </div>';
         }
         
         ?>
         <!-- <div class="box_items">
            <div class="box_items_img">
               <img src="img/realme2.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="img/iphoneX.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="img/iphoneX.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item1.jpg" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item0.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/galaxyJ4.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/iphoneX.jpg" alt="">
               <a class="add" href="">ADD TO CART</a>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/item0.jfif" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p>

         </div>
         <div class="box_items">
            <div class="box_items_img">
               <img src="./img/anh5.jpg" alt="">
               <div class="add"><a href="danhsach.html">ADD TO CART</a></div>
            </div>
            <a class="item_name" href="">SamSung J4</a>
            <p class="price">$4000</p> -->

         <!-- </div> -->



      </div>
   </div>
   <div class="boxright">
    <?php include "boxright.php" ?>

   </div>

</main>