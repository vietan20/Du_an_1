<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">QUÊN MẬT KHẨU</div>
            <div class="box_content form_account">
                <form action="index.php?act=quenmk" method="post">
                    <div class=" mb10">
                        <p>Email </p></br>
                        <input type="email" name="email">
                    </div>
                    <div class=" row mb10">
                        <input type="submit" value="GỬI" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 style="color: red;">
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