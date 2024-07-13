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

function add_danhmuc($id){
    $sql="SELECT * FROM danhmuc WHERE id=".$id;
    $danhmuc=pdo_query_one($sql);
    return $danhmuc;
}
function update_danhmuc($tendm,$id){
    $sql="UPDATE danhmuc SET tendm='".$tendm."' WHERE id=".$id;
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc WHERE id=".$id;
    pdo_execute($sql);
}

?>