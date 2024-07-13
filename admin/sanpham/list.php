<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sách sản phẩm</h1>
        </div>
        <form  action="#" method="post">
            <input  type="text" name="kyw" id="">
            <select name="iddm" id="">
                <option value="0" select>Tất cả</option>
                <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="'.$id.'">'.$tendm.'</option>';
                    }
                ?>
            </select>
            <input class="btn btn-primary" type="submit" name="listok" value="GO">
        </form>
        <br>
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Giá</th>
                       
                        <th>Số lượng</th>
                        <th>Lượt xem</th>
                        <th>mô tả</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php 
                        foreach($listsp as $sp){
                            extract($sp);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$hinhanh;
                            if(is_file($hinhpath)){
                               $img ="<img src='".$hinhpath."' width='100'>" ;
                            }else{
                                $img = "no photo";
                            }

                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tensp.'</td>
                            <td>'.$img.'</td>
                            <td>'.$gia.'</td>
                           
                            <td>'.$soluong.'</td>
                            <td>'.$luotxem.'</td>
                            <td>'.$mota.'</td>
                            <td> <a href="'.$suasp.'"><button class="btn btn-primary" type="button">Sửa</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoasp.'"><button class="btn btn-primary" type="button">Xóa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=addsp"><button class="btn btn-primary" type="button">Nhập thêm</button></a>
                </div>
            </form>
        </div>