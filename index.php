<?php
   session_start();
   include "../du_an_mau/model/pdo.php";
   include "../du_an_mau/model/sanpham.php";
   include "../du_an_mau/model/danhmuc.php";
   include "../du_an_mau/model/taikhoan.php";
   include "view/header.php";
   include "globlal.php";

   $spnew = loadall_sanpham_home();
   $dsdm = loadall_danhmuc();
   $dstop10 = loadall_sanpham_top10();



   if((isset($_GET['act'])) && ($_GET['act'])!= ''){
      $act = $_GET['act'];
      switch ($act) {
         case 'gioithieu':
            include "view/gioithieu.php";
            break;
         case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
               $kyw = $_POST['kyw'];
            }else{
               $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
               $iddm = $_GET['iddm'];
            }else{
               $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm );
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
         case "sanphamct":
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
               $sanpham = loadone_sanpham($_GET['idsp']);
               $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
               // $binhluan = loadall_binhluan($_GET['idsp']);
               include "view/sanphamct.php";
           }
               
            break;
         case 'lienhe':
            include "view/lienhe.php";
            break;
         
         case 'dangki':
            if(isset($_POST['dangki']) && ($_POST['dangki'])){
               $email = $_POST['email'];
               $user = $_POST['user'];
               $pass = $_POST['pass'];
               insert_taikhoan($email, $user, $pass);
               $thongbao = "Đã đăng kí thành công! vui lòng đăng nhập";
            }
            include "view/taikhoan/dangki.php";
            break;
         case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
               $user = $_POST['user'];
               $pass = $_POST['pass'];
               $checkuser = check_user($user, $pass);
               if(is_array($checkuser)){
                  $_SESSION['user'] = $checkuser;
                  // $thongbao = "Bạn đã đăng nhập thành công";
                  header('location:index.php');
               }else{
                  $thongbao = "user hoặc password không đúng";
               }
            }
            include "view/taikhoan/dangki.php";
            break;
         case 'edit_taikhoan':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
               $user = $_POST['user'];
               $pass = $_POST['pass'];
               $email = $_POST['email'];
               $address = $_POST['address'];
               $tel = $_POST['tel'];
               $id = $_POST['id'];
               update_taikhoan($id, $user, $pass, $email, $address, $tel);
               $_SESSION['user'] = check_user($user, $pass);
                  header('location:index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
         case 'quenmk':
            if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
               
               $email = $_POST['email'];
      
               $checkemail = check_email($email);
               if(is_array($checkemail)){
                   $thongbao = "Mật khẩu của bạn là: ". $checkemail['pass'];
               }else{
                  $thongbao = "Email này không tồn tại!";
               }
            }
            include "view/taikhoan/quenmk.php";
            break;
         case 'thoat':
            session_unset();
            header('location:index.php');
            break;
         
         default:
         include "view/home.php";
            break;
      }
   }else{
      include "view/home.php";
   }
   include "view/footer.php";
