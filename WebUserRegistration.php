<?php
echo "Registration Successfull";
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DatabaseConfig.php';
 mysql_select_db( "firstdb", $con );
$con=mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
$name=$_POST['user'];
$gst=$_POST['gst'];
$password=$_POST['password'];
$CheckSQL="SELECT * FROM admin WHERE gstno='$gst'";
$check=mysqli_fetch_array(mysqli_query($con,$CheckSQL));
if(isset($check)){
 echo "GST NO Already Exit";
}
else{
$Sql_Query="INSERT INTO admin(name,gstno,password)values('$name','$gst','$password')";
if(mysqli_query($con,$Sql_Query))
{
 echo "Registration Successfull";
}
else{
 echo 'Something Went Wrong';
}
}
mysqli_close($con);
// header('location:WebLoginAndSignup.html');
}



?>
