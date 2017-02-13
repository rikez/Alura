<?php
require_once './db.php';
require_once './auth.php';

function authorize($con, $email, $password) {
    $senhaMd5 = md5($password);
    $email = mysqli_real_escape_string($conexao, $email);
    $q = "select * from user where email='{$email}' and password='{$senhaMd5}'";
    $res = mysqli_query($con, $q);
    return mysqli_fetch_assoc($res);
}

$user = authorize($con, $_POST["email"], $_POST["password"]);
if($user == null) {
  header("Location: /login.php");
} else {
  signUser($user["email"]);
  header("Location: /product.php");
}
die();
