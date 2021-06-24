<?php
$username="root";
$password="";
$server='localhost';
$database='blog';
$connect=mysqli_connect($server,$username,$password,$database);

if($connect)
{
	echo "connection success";

}else
{
	echo "<br>connection not success";
}





 if ($_POST['action'] == 'post_view_inbody') {

		$query = "select * from  blog_post";

		$qrun = mysqli_query($connect,$query);
        $connect=mysqli_connect($server,$username,$password,$database);
		while ($res = mysqli_fetch_array($qrun)) {
            
			 // $username = getusername($connect,$res['user_id']);

			$arr[] = array('email'=>$res['email'],'post_title'=>$res['post_title'],'post_description'=>$res['post_description'],'post_photos'=>$res['post_photos'],'user_id' =>$res['user_id']);
		}
		echo json_encode($arr);

		  
	}
	?>