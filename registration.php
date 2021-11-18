<?php

session_start();
header('loation:login.php');

$con=mysqli_connect('localhost', 'root', 'wVLi8hhZ4Ykjm/Z');
mysqli_select_db($con,'userragistrtion');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"User Name already taken";} else {$reg="insert into usertable (name, password) value('$name','$pass')";
    mysqli_query($con, $reg); echo"Registration Successful"; }
?>
