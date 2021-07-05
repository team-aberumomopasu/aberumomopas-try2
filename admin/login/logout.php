<?php
session_start();
include("../../config/link.php");

$_SESSION = array();

if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
  setcookie(session_name(), '', time() - 42000, '/');
}

session_destroy();

header("Location:$re_login");
exit();
