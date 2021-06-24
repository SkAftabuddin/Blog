<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>
  <style type="text/css">
     .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: #444;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
     
      }
      /* Position the Popup form */
      .login-popup {
      position:static;
      text-align: center;
      width: 100%;
      }
      /* Hide the Popup form */
      .form-popup1 {
      display: none;
      position:fixed;
      left:45%;
      top:5%;
      transform: translate(-45%,5%);
      border: 1px solid #666;
     background-image:linear-gradient(#000000,#434343);
      border-radius: 15px;
      z-index: 9;
      width: 45%;
      top:10%;
      opacity:0.8;
      
      }
      .form-popup2 {
      display: none;
      position:fixed;
      left:45%;
      top:5%;
      transform: translate(-45%,5%);
      border: 1px solid #666;
     background-image:linear-gradient(#000000,#434343);
      border-radius: 15px;
      z-index: 9;
      width: 45%;
      top:5%;
      opacity:0.8;
      
      }
      .form-container {
      width: 100%;
      padding:20px;
     background-image:linear-gradient(#000000,#434343);
      color:dodgerblue;
      }
       .form-container .cancel {
      background-color: #cc0000;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }
  </style>
</head>
<body>
<div class="container-fluid">

  <div class="page-header" id="particles-js">
    
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

  <input type="button" class="open-button" value="Login" onclick="openForm()">
<div class="login-popup">
  <div class="form-popup1" id="popupForm1">
<div class="form-container" id="popupForm" rules="all">




 <form action="process_log.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
  </div>
  
  <input type="submit" value="Submit" name="submitse" class="btn btn-success">
</form>




 </div>
 <button type="button"  class="btn btn-danger" onclick="closeForm()">Close</button>
</div>
<br>
</div>
 <input type="button" class="open-button" value="SignUp" onclick="openForm1()">
<div class="login-popup">
  <div class="form-popup2" id="popupForm2">
<div class="form-container" id="popupForm" rules="all">
 


<form name="sigin" id="sigin">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone</label>
      <input type="number" name="ph" class="form-control" id="inputno" placeholder="Phone number">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="pwd" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="addr" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Job</label>
      <input type="text" name="job" class="form-control" id="inputjob">
    </div>
    <div class="form-group col-md-4">
      <label for="inputgen">Gender</label>
      <select id="inputgen" name="gen" class="form-control">
        
        <option name="gen">Male</option>
        <option name="gen">Female</option>
        <option name="gen">Other type</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Dob</label>
      <input type="date" name="dob" class="form-control" id="inputdob">
    </div>
  </div>
  <input type="file" name="pic">
  <button type="button" name="submit" class="btn btn-success" onclick="myfunction();">Submit</button>
  <button type="button"  class="btn btn-danger" onclick="closeForm1()">Close</button>
</form>



 </div>
 
</div>
</div>

 
 
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰Welcome to my Blog</button>  
 
</div>

<script type="text/javascript">
   function myfunction() 
   {
var formData = new FormData(sigin);
formData.append('action','sigin');


$.ajax({
  
        url:"process_index.php",
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
<script>
  function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)"
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}


</script>

  </div>
  <div class="panel-footer">
<i class="fab fa-facebook-messenger" style="color:white;size:10px;"></i>
<marquee>Notice</marquee>
<span></span>

</div>
</div>
<script src="particles.js" type="text/javascript" ></script>
<script src="app.js" type="text/javascript" ></script>
<script>
   function openForm() {
        document.getElementById("popupForm1").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("popupForm1").style.display="none";
      }
      function openForm1() {
        document.getElementById("popupForm2").style.display="block";
      }
      
      function closeForm1() {
        document.getElementById("popupForm2").style.display="none";
      }
</script>

















</body>
</html>