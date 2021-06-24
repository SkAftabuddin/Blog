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

	
	if($_POST['action']=='post')
	{
		$email=$_POST["email"];
	$userid=$_POST["userid"];
	$categid=$_POST["categid"];
	$title=$_POST["title"];
	$post=$_POST["post"];
	
	//$img=$_FILES["img"];
	$sc=$_POST["subcateg"];

	
//insert query
print_r($_POST);
$query="insert into blog_post(email,user_id,category_id,post_title,post_description,subcategory_id) values('$email','$userid','$categid','$title','$post','$sc')";
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
if ($_POST['action'] == 'category') {
		$query = "select * from category";

		$qrun = mysqli_query($connect,$query);

		while ($res = mysqli_fetch_array($qrun)) {
			$arr[] = array('email'=>$res['email'],'category_name'=>$res['category_name']);
		}
		echo json_encode($arr);
	}
if ($_POST['action'] == 'subcategory') {
		$query = "select * from subcategory where email = {$_POST['email']}";

		$qrun = mysqli_query($connect,$query);

		while ($res = mysqli_fetch_array($qrun)) {
			$arr[] = array('email'=>$res['email'],'subcategory_name'=>$res['subcategory_name']);
		}
		echo json_encode($arr);
	}

?>