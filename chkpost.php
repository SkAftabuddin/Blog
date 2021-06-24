<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
   	.bod
   	{
   		margin: 0;
    padding: 0;
     height: 100%;
font-size: 100%;
    	background-image:url('pic1.jpg');
    	background-size: cover no repeat;
   	}
   	label
   	{
   		color: white;
   	}
   	.f
   	{
   		color:black;background-color: black;border-radius:8px;opacity: 0.7;   	}
   </style>
</head>
<body class="bod">

<div class="container">
 
  <fieldset class="f">
  	
 
  <legend> <h2 style="color:red;">Posts</h2></legend>
  	<center>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">UserId</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="userid">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">CategoryId</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter category id" name="categid">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Post title</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter title" name="title">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Post description</label>
      <div class="col-sm-10">          
       <textarea class="form-control" placeholder="Post your comments here" rows="5" id="comment"></textarea>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Post subcategory</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter subcategory" name="subcateg">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-1">
        <button type="submit" class="btn btn-success">Submit</button>
       

      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-1">
        <button type="reset" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </form>
</center>
</fieldset>
</div>
</body>
</html>