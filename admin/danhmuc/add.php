<div class="container-fluid pt-4 px-4 ">
            <h1>Thêm mới loại hàng</h1>
        </div>
        <div class="bg-light rounded p-4 ">
        <form action="index.php?act=adddm" method="post">
                <div class="row frmcontent">
                    Mã loại <br>
                    <input class="form-control" type="text" name="madm" id=""><br>
                    Tên loại <br>
                    <input class="form-control" type="text" name="tendm" id=""><br>
                </div>
                
                <div class="pt-4">
                    <button class="btn btn-primary" type="submit" name="themmoi" value="themmoi" >Thêm mới</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                    <a href="index.php?act=listdm"><button class="btn btn-primary" type="button">Danh sách</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
        