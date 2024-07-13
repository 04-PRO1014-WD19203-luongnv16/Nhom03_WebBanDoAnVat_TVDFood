<?php
session_start();
ob_start();

include "model/pdo.php";
include "model/sanpham.php";


if (!isset ($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$spvip = loadall_sanphamvip_home();
$dsdm = loadall_danhmuc();

include "header.php";

if ((isset ($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        


        case 'listsp':
            if (isset ($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = loadall_danhmuc();
            $listsp = loadall_sanpham($kyw, $iddm);
            include "view/sanpham.php";
            break;

        case 'thoat':
            session_unset();
            header("location: index.php");
            break;
       

        case 'dssanpham':

            include "view/sanpham.php";
            break;

        case 'sanpham':

            if (isset ($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];

            } else {
                $kyw = "";
            }
            if (isset ($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_danhmuc($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset ($_GET['idsp']) && ($_GET['idsp'] > 0)) {

                $onesp = loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/chitietsp.php";
                break;
            } else {
                include "view/home.php";
                break;
            }     
        case 'chitietsp':
            include "view/chitietsp.php";
            break;       
        default:
            include "view/home.php";
            break;

          
    
           
                    
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>