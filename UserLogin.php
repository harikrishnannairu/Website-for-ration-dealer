<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
$con=mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
$email=$_POST['email'];
$password=$_POST['password'];
$Sql_Query="SELECT * FROM user WHERE user_email='$email' and user_password='$password'";
$check=mysqli_fetch_array(mysqli_query($con,$Sql_Query));
if(isset($check)){
echo "Data Matched";
}
else{
echo "Invalid Username or Password ";
}
mysqli_close($con);
}
else{
echo "Check Again";
}

?>
