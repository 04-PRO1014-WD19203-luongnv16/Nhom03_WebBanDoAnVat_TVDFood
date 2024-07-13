<div class="container-fluid pt-4 px-4 ">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                    Tên sản phẩm <br>
                    <input class="form-control" type="text" name="tensp" id=""><br>
                    Giá <br>
                    
                    <input class="form-control" type="text" name="dungluong" id=""><br>
                    Số lượng <br>
                    <input class="form-control" type="text" name="soluong" id=""><br>
                    Danh mục <br>
                    <select class="form-control" name="iddm" id="">
                        <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            echo '<option value="'.$id.'">'.$tendm.'</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    
                    Hình <br>
                    <input  type="file" name="hinh" id=""><br>
                    Mô tả<br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="pt-4">
                    <button class="btn btn-primary" type="submit" name="themsp" value="themsp" >Thêm mới</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                    <a href="index.php?act=listsp"><button class="btn btn-primary" type="button">Danh sách</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
    