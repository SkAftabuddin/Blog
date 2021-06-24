<?php 
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

if (isset($_POST['action']))
{

	
	if($_POST['action']=='sigin')
	{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$ph=$_POST["ph"];
	$gender=$_POST["gen"];
	$addr=$_POST["addr"];
	//$pic=$_FILE["pic"];
	$job=$_POST["job"];
	$dob=$_POST["dob"];
	$pwd=$_POST["pwd"];
//insert query
print_r($_POST);
$query="insert into project1u(name,email,ph,gender,addr,job,dob,pwd) values('$name','$email','$ph','$gender','$addr','$job','$dob','$pwd')";
echo $query;
//run the query
 $result=mysqli_query($connect,$query);
 echo $result;
if($result)
{
	echo "<br>data inserted";
}else
{
	echo "<br>data is not inserted";
}
}



}


?>