<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">ĐĂNG KÍ THÀNH VIÊN</div>
            <div class="box_content form_account">
                <form action="index.php?act=dangki" method="post">
                    <div class=" mb10">
                        <p>Email </p></br>
                        <input type="email" name="email">
                    </div>
                    <div class=" mb10">
                        <p>Tên đăng nhập</p></br>
                        <input type="text" name="user">
                    </div>
                    <div class=" mb10">
                        <p>Password</p></br>
                        <input type="password" name="pass">
                    </div>
                    <div class=" row mb10">
                        <input type="submit" value="ĐĂNG KÍ" name="dangki">
                    </div>
                    <div class="row mb10">
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