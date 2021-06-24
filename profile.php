<?php 
session_start();
$email=$_SESSION['email'];

 ?>


<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head><body>
<?php $username="root";
$password="";
$server='localhost';
$database='blog';
$connect=mysqli_connect($server,$username,$password,$database);
/*
select coulmn1,column2,column3 or * from tablename
*/

$query="select name,job,dob,ph,addr,email,gender from project1u where email='$email'";
 $res=mysqli_query($connect,$query);
$i=0;
while($r=mysqli_fetch_array($res)){ $i++;
	?>

	<div class="page-header">
  <h1>Profile</h1>
  </div>
  <div class="card">
 <!-- <img src="<?php echo $r['pic'];   ?>" alt="<?php echo $r['name'];   ?>" style="width:100%">-->
  <h1><?php echo $r['name'];   ?></h1>
  <p class="title"><?php echo $r['job'];   ?></p>
  <p class="title"><?php echo $r['gender'];   ?></p>
  <p><?php echo $r['dob'];   ?></p>
  
  <p><?php echo $r['email'];   ?></p>
  <p><<?php echo $r['addr'];   ?>></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button type="button"><?php echo $r['ph'];   ?></button></p>
  <p><button type="button"><?php echo "<a href='delete.php?key=$r[email]'>Delete</a>"?></button></p>
  <p><button type="button" ><?php echo "<a href='update.php?key=$r[email]'>Update</a>"?></button></p>
</div>
<?php }?>
</body>
</html>