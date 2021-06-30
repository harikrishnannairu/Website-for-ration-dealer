<?php
echo "Invalid Username or Password ";
echo "Invalid Username or Password ";
echo "Invalid Username or Password ";
echo "Invalid Username or Password ";

if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
$con=mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
$name=$_POST['user'];
$gst=$_POST['gst'];
$password=$_POST['password'];
$Sql_Query="SELECT * FROM admin WHERE gstno='$gst' and password='$password'";
$check=mysqli_fetch_array(mysqli_query($con,$Sql_Query));
if(isset($check)){
echo "Data Matched";
header('location:WebHomePage.html');
}
else{
echo "Invalid Username or Password ";
header('location:WebLoginAndSignup.html');
}
mysqli_close($con);
}
else{
echo "Check Again";
}


?>
