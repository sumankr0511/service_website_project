<?php 

$con = mysqli_connect("localhost","root","","projectone");
if($con){
	echo "connection successfull";
}
else{
	echo "not connected";
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfo (user,email,mobile,comments) 
VALUES ('$user','$email','$mobile','$comments') ";

mysqli_query($con, $query);
header('location:index.php');



?>