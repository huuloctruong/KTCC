<?php
require_once "./index.php";
$action = $_REQUEST['action'];
if (!isset($action)) {
    die("Invalid Request!");
}
switch ($action) {
    case 'login':
        login();
    default:
        break;
}
function login()
{
    $ten = $_POST['ten'];
    $password = $_POST['password'];
    if ($ten == "admin" && $password == "admin")
        echo "<h3>Đăng nhập thành công</h3>";
    else
        echo "<h3>Đăng nhập thất bại</h3>";
}
