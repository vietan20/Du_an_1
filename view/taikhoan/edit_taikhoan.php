<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="box_content form_account">
                <?php
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class=" mb10">
                        <p>Email </p></br>
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class=" mb10">
                        <p>Tên đăng nhập</p></br>
                        <input type="text" name="user" value="<?= $user ?>">
                    </div>
                    <div class=" mb10">
                        <p>Password</p></br>
                        <input type="password" name="pass" value="<?= $pass ?>">
                    </div>
                    <div class=" mb10">
                        <p>Địa chỉ</p></br>
                        <input type="text" name="address" value="<?= $address ?>">
                    </div>
                    <div class=" mb10">
                        <p>Số điện thoại</p></br>
                        <input type="text" name="tel" value="<?= $tel ?>">
                    </div>
                    <div class=" row mb10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                    
            
                </form>
                <h2 style="color: green;">
                <?php
                if(isset($thongbao) && ($thongbao != "")){
                    echo $thongbao;
                }
                
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxright">
        <?php include "view/boxright.php" ?>
    </div>
</main>