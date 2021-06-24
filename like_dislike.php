<?<?php 
session_start();
$username="root";
$password="";
$server='localhost';
$database='blog';
$connect=mysqli_connect($server,$username,$password,$database);

if($connect)
{
	echo "<br>connection success";

}else
{
	echo "<br>connection not success";
}

$
$operation=$_POST['like_dislike'];

$query="Select * from like_dislike where email='$email'";

 ?>