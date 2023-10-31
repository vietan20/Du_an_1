<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function check_user($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' AND pass='$pass'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc ";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
        $sql = "update taikhoan set user='" . $user . "' , pass='" . $pass . "' , email='" . $email . "' , address='" . $address . "', tel='" . $tel . "' where id =" . $id;
    pdo_execute($sql);
}


?>