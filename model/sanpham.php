<?php
function insert_sanpham($tensp,$img,$gia,$dungluong,$soluong,$mota,$iddm){
    $sql="INSERT INTO sanpham(tensp,hinhanh,gia,dungluong,soluong,mota,iddm) 
    VALUES('$tensp','$img','$gia','$dungluong','$soluong','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw,$iddm=0){
    $sql="SELECT * FROM sanpham where 1";
    if($kyw!=""){
         $sql.=" and tensp like '%".$kyw."%'";
    }
    if($iddm>0){
       $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY id DESC";
    $listsp=pdo_query($sql);
    return $listsp;
}

function load_ten_danhmuc($iddm){
   if($iddm>0){
      $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
      $dm=pdo_query_one($sql);
      extract($dm);
      return $tendm;
   }else {
      return "";
   }
}


function loadone_sanpham($id){
    $sql="SELECT * FROM sanpham WHERE id=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
 }

 function load_sanpham_cungloai($id,$iddm){
   $sql="SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <> ".$id;
   $listsp=pdo_query($sql);
   return $listsp;
}

 function update_sanpham($id,$tensp,$img,$gia,$dungluong,$soluong,$mota,$iddm){
    if($img!=""){
       $sql="UPDATE sanpham SET tensp='".$tensp."',hinhanh='".$img."',gia='".$gia."',dungluong='".$dungluong."',soluong='".$soluong."',mota='".$mota."',iddm='".$iddm."' WHERE id=".$id;
    }else{
        $sql="UPDATE sanpham SET tensp='".$tensp."',gia='".$gia."',dungluong='".$dungluong."',soluong='".$soluong."',mota='".$mota."',iddm='".$iddm."' WHERE id=".$id;
    }
     
     pdo_execute($sql);
  }

  function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham where 1 ORDER BY id DESC LIMIT 0,6";
    $listsp=pdo_query($sql);
    return $listsp;
 }

 function loadall_sanphamvip_home(){
    $sql="SELECT * FROM sanpham where 1 ORDER BY id DESC LIMIT 0,8";
    $listsp=pdo_query($sql);
    return $listsp;
 }


?>