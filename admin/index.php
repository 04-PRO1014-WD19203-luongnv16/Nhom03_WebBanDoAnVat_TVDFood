<?php
session_start();
include "../model/pdo.php";

include "../model/sanpham.php";


include "header.php";
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
switch ($act) {
   
    //san pham

    case 'addsp':
        if(isset($_POST['themsp'])&&($_POST['themsp'])){
            $tensp=$_POST['tensp'];
            $gia=$_POST['gia'];
            $dungluong=$_POST['dungluong'];
            $soluong=$_POST['soluong'];
            $mota=$_POST['mota'];
            $iddm=$_POST['iddm'];

            $file=$_FILES['hinh'];
            $img=$file['name'];
            move_uploaded_file($file['tmp_name'],"../upload/".$img);

            insert_sanpham($tensp,$img,$gia,$dungluong,$soluong,$mota,$iddm);
            $thongbao="them thanh cong";
        }
        $listdm=loadall_danhmuc();
        include "sanpham/add.php";
        break;

        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }    
            $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham($kyw,$iddm);
        include "sanpham/list.php";
        break;

        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            $listdm=loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $gia=$_POST['gia'];
                $dungluong=$_POST['dungluong'];
                $soluong=$_POST['soluong'];
                $mota=$_POST['mota'];

                $file=$_FILES['hinh'];
                $img=$file['name'];
                move_uploaded_file($file['tmp_name'],"../upload/".$img);
                update_sanpham($id,$tensp,$img,$gia,$dungluong,$soluong,$mota,$iddm);
                $thongbao="cap nhat thanh cong";
            }
            $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham('',0);
            include "sanpham/list.php";
            break;
                
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp=loadall_sanpham('',0);
            include "sanpham/list.php";
            break;

          
                      

                
    
    default:
        include "home.php";
        break;
}
}else{
    include "home.php";
}




include "footer.php";

?>