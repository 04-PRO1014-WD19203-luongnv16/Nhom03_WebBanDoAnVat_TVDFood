<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";


include "header.php";
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
switch ($act) {
    // danh muc
    case 'adddm':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tendm=$_POST['tendm'];
            insert_danhmuc($tendm);
            $thongbao="them thanh cong";
        }
        include "danhmuc/add.php";
        break;

    case 'listdm':

        $listdm=loadall_danhmuc();
        include "danhmuc/list.php";
        break;

    case 'suadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $danhmuc=add_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break;

    case 'updatedm':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            $tendm=$_POST['tendm'];
            $id=$_POST['id'];
            update_danhmuc($tendm,$id);
        }
        $listdm=loadall_danhmuc();
        include "danhmuc/list.php";
        break;
    case 'xoadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_danhmuc($_GET['id']);
        }
            $listdm=loadall_danhmuc();
            include "danhmuc/list.php";
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