<?php
session_start();
function verifyUser() {
  if(!isUserLogged()) {
    $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
    header("Location: /login.php");
    die();
  }
}

function isUserLogged() {
  return isset($_SESSION["user_auth"]);
}

function userLogged() {
  return $_SESSION["user_auth"];
}

function logout() {
  session_destroy();
  session_start();
}

function signUser($email) {
  $_SESSION["user_auth"] = $email;
}
