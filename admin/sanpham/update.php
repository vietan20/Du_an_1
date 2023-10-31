<?php

if (is_array($sanpham)) {
  extract($sanpham);
  // var_dump ($sanpham);
}
$hinhpart = "../upload/" . $img;
if (is_file($hinhpart)) {
  $hinh = "<img src='" . $hinhpart . "' height='80'>";
} else {
  $hinh = "no photo";
}

?>
<div class="row2">
  <div class="row2 font_title">
    <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
        <select name="iddm">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
          if ($iddm == $danhmuc['id']) echo '<option value="' . $danhmuc['id'] . '" selected>' . $danhmuc['name'] . '</option>';
            else echo '<option value="' . $danhmuc['id'] . '" >' . $danhmuc['name'] . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp" value="<?= $name ?>">
      </div>
      <div class="row2 mb10">
        <label>Giá </label> <br>
        <input type="text" name="giasp" value="<?= $price ?>">
      </div>
      <div class="row2 mb10">
        <label>Hình ảnh </label> <br>
        <input type="file" name="hinh">
        <?= $hinh ?>
      </div>
      <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input class="mr20" type="submit" name="capnhap" value=" Cập Nhập">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=lissp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>