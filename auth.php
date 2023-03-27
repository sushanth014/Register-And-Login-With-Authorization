<?php
// validation registration and login details
session_start();
$conn=mysqli_connect('localhost','root','','example');
//here example is your database name
$email=$_POST['email'];
$password=$_POST['password'];
$s="select * from signup where email='$email'&& password='$password'";
$result=mysqli_query( $conn,$s);
$num=mysqli_num_rows(   $result);


if($num==1){
    header('location:dashboard.html');
}
else{
    $count++;
    echo 'invalid login id or password';
if($count>0){
    header('location:login.html');
}
    
}
?>
