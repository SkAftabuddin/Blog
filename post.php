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
  <form name="post" id="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">CategoryId</label>
      <div class="col-sm-10">          
        
        <select name="" id="categid"  class="form-control" name="categid" onchange="categ(this.value)">
        	<option value="1">Java</option>
        	<option value="2">Python</option>
        	<option value="3">Angular</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="pwd">Subcategory</label>
      <div class="col-sm-10">          
        <select class="form-control" id="subcateg"  name="subcateg">
        </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Enter your Email</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter title" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Enter your title</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Enter description</label>
      <div class="col-sm-10">          
       <textarea class="form-control" placeholder="Post your comments here" name="post" rows="5" id="comment"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="pwd">Upload Images</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="img"  name="img">
      </div>
    </div>
     
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-1">
        <button type="submit" class="btn btn-success" onclick="myfunction();">Submit</button>
       

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
<script type="text/javascript">
   function myfunction() 
   {
var formData = new FormData(post);
formData.append('action','post');


$.ajax({
  
        url:"process_post.php",
        type:"POST",
        data:formData,
        processData:false,
        contentType:false,
        success:function(result)
        {
            alert("Successful");
        console.log(result);
        return false;
    }
        });
console.log(formData);
   }




</script>
<script type="text/javascript">
    function get_category(){
      var data = {action:'category'}
      $.ajax({
        url:'post_process.php',
        type:'POST',
        data:data,
        success:function(result){
           console.log(result);

          var data = JSON.parse(result);
          var option ="<option>Select a Category</option>";
          for(let i=0;i<data.length;i++){
            option += '<option value="'+data[i]['email']+'">'+data[i]['category_name']+'</option>'
          }
           console.log(option);
          document.getElementById('categ').innerHTML = option;
        }
      });
    }
    $(function(){
      get_category();
    })
    
  </script>
  //subcategory AJAX Call
<script>
  function categ(cid){
      var data = {action:'subcategory',
                    email : email};
        $.ajax({
        url:'process_post.php',
        type:'POST',
        data:data,
        success:function(result){
           // console.log(result);

          var data = JSON.parse(result);
          var option ="";
          for(let i=0;i<data.length;i++){
            option += '<option value="'+data[i]['email']+'">'+data[i]['subcategory_name']+'</option>'
          }
           console.log(option);
          document.getElementById('subcateg').innerHTML = option;
        }
      });          
    }
</script>
</body>
</html>