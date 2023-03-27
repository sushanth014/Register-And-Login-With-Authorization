<?php
session_start();
$count=0;
$conn=mysqli_connect('localhost','root','','example');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];

$s="select * from signup where email='$email'";
$result=mysqli_query( $conn,$s);
$num=mysqli_num_rows(   $result);
if($num>=1){
echo '<script type ="text/JavaScript">';  
echo 'alert("This email is already registered ")';  
echo '</script>';  
}    
else{
    if($password==$cpassword and $count<=2){
        $reg="  insert into signup(name,email,password,cpassword,gender) values('$name','$email','$password','$cpassword','$gender')";
        mysqli_query($conn,$reg);
        echo "Registration successfull";
        header('location:login.html');  
    }
    else{
        echo "password mis matched  : ";
        
        
        $count++;
        echo $count;
       
    }
   
}
?>