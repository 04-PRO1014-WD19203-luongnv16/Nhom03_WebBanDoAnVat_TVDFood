<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>


<div class="container-fluid pt-4 px-4 ">
<h1>Cap nhat hang hoa</h1>
        </div>
        <div class="bg-light rounded p-4">
            <form action="index.php?act=updatedm" method="post">
                <div class="row frmcontent">
                    Mã loại <br>
                    <input class="form-control" type="text" name="id" id=""><br>
                    Tên loại <br>
                    <input class="form-control" type="text" name="tendm" id="" value="<?=$tendm?>" ><br>
                </div>
                
                <div class="pt-4">
                    <input type="hidden" name="id" value="<?= $id?>">
                    <button class="btn btn-primary" type="submit" name="capnhat" value="capnhat" >Cập nhật</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                    <a href="index.php?act=listdm"><button class="btn btn-primary" type="button">Danh sách</button></a>
                </div>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                        ?>
            </form>
        </div>
        

<!-- <div class="row bm frmtitle">
            <h1>Cap nhat hang hoa</h1>
        </div>
        <div class="row">
            <form action="index.php?act=updatedm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input type="text" name="id" id=""><br><br>
                    Ten loai <br>
                    <input type="text" name="tendm" id="" value="<?=$tendm?>" ><br>
                </div>
                
                <div class="row frmcontent">
                    <input type="hidden" name="id" value="<?= $id?>">
                    <button type="submit" name="capnhat" value="capnhat" >Cập nhật</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button type="button">Danh sach</button></a>
                </div>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                        ?>
            </form>
        </div>
    </div> -->