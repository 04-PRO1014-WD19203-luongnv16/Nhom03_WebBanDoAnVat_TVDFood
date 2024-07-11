<?php
function insert_taikhoan($user, $pass, $email, $sdt, $diachi)
{
    $sql = "INSERT INTO taikhoan(user,pass,email,sdt,diachi) 
        VALUES('$user','$pass','$email','$sdt','$diachi')";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
?>