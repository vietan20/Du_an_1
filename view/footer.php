<footer class="box_footer row mb demo">
  <div id="footer">
    <div class="footer-left">
      <div class="footer-logo">
        <img src="http://localhost/du_an_mau/view/img/FPTShop_logo.jpg" alt="" />
      </div>
      <div class="card_1">
        <h3>CÔNG TY ĐIỆN TỬ FPT SỐ 1 VIỆT NAM</h3>
        <div>
          <i class="fa-sharp fa-solid fa-location-pin"></i>
          <p>
            Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.
          </p>
        </div>

        <div>
          <i class="fa-solid fa-phone-flip"></i>
          <p>1900.63.69.36</p>
        </div>

        <div>
          <i class="fa-solid fa-envelope"></i>
          <p>info@tocotocotea.com</p>
        </div>

        <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
        <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.</p>
        <div class="icons">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-square-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
          <i class="fa-brands fa-square-twitter"></i>
          <i class="fa-brands fa-google-plus"></i>
        </div>

        <div class="images">
          <div class="image">
            <img src="http://localhost/du_an_mau/view/img/anh4.jpg" alt="" />
          </div>
          <div class="image">
            <img src="http://localhost/du_an_mau/view/img/anh1.jpg" alt="" />
          </div>
        </div>

        <div class="image_3 image">
          <img src="http://localhost/du_an_mau/view/img/anh2.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="footer-right">
      <div class="card_2">
        <h3>VỀ CHÚNG TÔI</h3>
        <a href="#">Giới thiệu về TocoToco</a>
        <a href="gioithieu.html">Nhượng quyền</a>
        <a href="">Tin tức khuyến mại</a>
        <a href="">Cửa hàng</a>
        <a href="#">Quy định chung</a>
        <a href="#">TT liên hệ &#038; ĐKKD</a>
      </div>
      <div class="card_3">
        <h3>CHÍNH SÁCH</h3>
        <a href="#">Chính sách thành viên</a>
        <a href="#">Hình thức thanh toán</a>
        <a href="#">Vận chuyển giao nhận</a>
        <a href="#">Đổi trả và hoàn tiền</a>
        <a href="#">Bảo vệ thông tin cá nhân</a>
        <a href="#">Bảo trì, bảo hành</a>
      </div>
    </div>
  </div>
  <!-- footer section ends -->
</footer>
</div>
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>
</body>

</html>