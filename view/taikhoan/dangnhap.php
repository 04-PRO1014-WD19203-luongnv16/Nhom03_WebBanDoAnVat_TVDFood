<!-- Contact Start -->
<div class="container-fluid pt-5 ">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Đăng nhập tài khoản</span></h2>
    </div>
<center>
    <div class=" form_dn ">
        <div class="contact-form">
            <form action="index.php?act=dangnhap" method="post">
                <div class="control-group">
                    User name: <br>
                    <input type="text" class="form-control" name="user" required> <br>
                </div>
                <div class="control-group">
                    Password: <br>
                    <input type="password" class="form-control" name="pass" required> <br>
                </div>
                <div>
                    <input class="btn btn-primary py-2 px-4" type="submit" name="dangnhap" value="Đăng nhập">
                    <a href="index.php?act=quenmk" class="btn btn-primary py-2 px-4">Quên mật khẩu</a>
                    <input class="btn btn-primary py-2 px-4" type="reset" value="Nhập lại">
                </div>
            </form>

            <?php
            if (isset ($thongbao) && ($thongbao != "")) {
                echo '<div class="thongbao">' . $thongbao . '</div>';
            }
            ?>
        </div>
    </div>
        </center>

</div>
<!-- Contact End -->