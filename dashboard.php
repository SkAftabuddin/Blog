<?php 
session_start();
if(!isset($_SESSION['email'])){
  header("location:index.php");}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
   .bt
   {
    border: none;
    background-color: white;
   } 
   
  </style>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Dashboard
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>-->
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-bell fa-fw me-3"></i><span>Notification</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-key fa-fw me-3"></i><span>Change Password</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-comments fa-fw me-3" ></i><button type="button" class="bt" onclick="location.href='post.php'">Post</button></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-trash fa-fw me-3"></i><span>Trash</span>
          </a>
         
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-share fa-fw me-3"></i><span>Share</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-user-friends fa-fw me-3"></i><span>Freinds</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-heart fa-fw me-3"></i><span>Favourites</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-users fa-fw me-3"></i><span>Groups</span></a>
         
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <i class="fab fa-blogger-b fa-2x">logger</i>
        &nbsp;&nbsp;&nbsp;
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>

          <!-- Icon dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
              data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="img/dark.jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profile.php">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="ulogout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
<script>
  
</script>

  <!--Main layout-->
  <main style="margin-top: 58px" id="post_main_div"></main>
   <script type="text/javascript">
    function post_view_body(){

     var data={action:'post_view_inbody'};
      // console.log(data);
     $.ajax({
        url:'dashboard_process.php',
        type:'POST',
        data:data,
        success:function(result){
             console.log(result);
            var data = JSON.parse(result);
            // console.log(data);

            var post ="";
                    for(let i=(data.length-1);i>=0;i--){ 
                    post += `<div class="container pt-4">
      <!-- Section: Main chart -->
      <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="img/White-Hat-Hackers.png" style="height:394px;width:570px; " alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4></h4>
                 
                  
                  </div>
                </div>
              </div>
              <p>
                    `+data[i]['post_description']+`
                  </p>
                  <button type="button" onclick="like(`+data[i]['id']+`);" id="like`+data[i]['id']+`" class="like"><i
              class="fas fa-thumbs-up fa-fw me-3" style="cursor: pointer;" onclick="like_dislike()"><span id="like_count"></span></i></button>
              <i
              class="fas fa-thumbs-down fa-fw me-3" style="cursor: pointer;" onclick="like_dislike()"></i>
              <div class="white-button">
                    
                    <input type="text" placeholder="Comment.." name="" style="border-radius:8px; ">
                    <input type="submit" value="Submit"  name="" style="border-radius:8px;background-color: dodgerblue;color:white; ">
            </div>
          </div>
    </div>`;
     }
            document.getElementById('post_main_div').innerHTML = post;
        }
     })
 }
 $(function(){
    post_view_body();
 });
</script>



  
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>
  <script>
    function like_dislike(post_id,email)
    { let data={email:post_id,like_dislike:email};

     $.ajax({ur:'like_dislike.php',type:'POST',data:data,success:function(result){console.log(result)
     }
   }); 
    }
    
  </script>

</body>

</html>