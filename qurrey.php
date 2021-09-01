<?php
require "connection.php";

$id='1';
$f_name="abu taleb1";
$l_name="jeehad1";
$email="atjeehad@gmail.com1";

$sql=mysqli_query($link,"UPDATE user_info set f_name='$f_name',l_name='$l_name',email='$email' where id ='$id' ");


?>