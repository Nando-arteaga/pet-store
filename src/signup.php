<?php

include('config/database.php');

$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['e_mail'];
$passw=$_POST['p_assw'];

$sql= "INSERT INTO users(
firstname,lastname,email,password)
values ('$fname','$lname','$email','$passw')";
$ans= pg_query ($conn,$sql);
if ($ans){
echo "user has been created succesfully";
}else {
echo "error";
}

?>