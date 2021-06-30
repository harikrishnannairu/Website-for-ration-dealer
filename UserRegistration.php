<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
$con=mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
$F_name=$_POST['f_name'];
$L_name=$_POST['l_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$CheckSQL="SELECT * FROM user WHERE user_email='$email'";
$check=mysqli_fetch_array(mysqli_query($con,$CheckSQL));
if(isset($check)){
 echo "Email Alreay Exit";
}
else{
$Sql_Query="INSERT INTO user(first_name,last_name,user_email,user_password)values('$F_name','$L_name','$email','$password')";
if(mysqli_query($con,$Sql_Query))
{
 echo "Registration Successfull";
}
else{
 echo 'Something Went Wrong';
}
}
mysqli_close($con);
}



?>
