<?php 
session_start();
$username="root";
$password="";
$server='localhost';
$database='blog';
$connect=mysqli_connect($server,$username,$password,$database);
if (isset($_POST["submitse"])) {

	$email=$_POST["email"];
	$pwd=$_POST["pwd"];

	$q="select * from project1u where email='$email' and pwd='$pwd'";
	$r=mysqli_query($connect,$q);
	$data=mysqli_fetch_array($r);
	
	$demail=$data["email"];
	$dpwd=$data["pwd"];
	
	
	if($demail==$email && $dpwd==$pwd)
	{
		header("location:dashboard.php");
		$_SESSION['email']=$data['email'];
		

	}else
	{
		echo "not happen";
	}
	
}
if($connect)
{
	

	echo "Connection is successfull";
}else
{
	echo "connection is not successfull";
}

?>