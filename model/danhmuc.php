<?php

function insert_danhmuc($tendm){
    $sql="INSERT INTO danhmuc(tendm) VALUES ('$tendm')";
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql="SELECT * FROM danhmuc ORDER BY id DESC";
    $listdm=pdo_query($sql);
    return $listdm;
}
?>