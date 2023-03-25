<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://kit.fontawesome.com/7ff49dcf72.css" crossorigin="anonymous">

</head>
<body>


<header>
<nav class="main-menu">

<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="admin_page.php">
<i class="fa fa-home fa-1.5x"></i>
<span class="nav-text">Home</span>
</a>
</li>   
       
                     
</li>
<li class="darkerlishadow">
<a href="crud_admin/crud.php">
<i class="fa fa-gamepad fa-1.5x"></i>
<span class="nav-text">User Dashboard</span>
</a>
</li>
  
  
</ul>

  
  
    
  
<ul class="logout">
<li>
                   <a href="logout.php">
                         <i class="fa fa-arrow-right-from-bracket fa-1.5x"></i>
                        <span class="nav-text">
                         logout
                        </span>
                        
                    </a>
</li>  
</ul>
        </nav>

</header>
  



<div class="container">
   <div class="content">
      <h3>hi, <span> admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p> Admin Dashboard is ONLINE! Please Select WHAT TO DO! THANK YOU </p>
      
      
      
   </div>

</div>
			
  
  <script src="https://kit.fontawesome.com/7ff49dcf72.js" crossorigin="anonymous"></script>
</body>
</html>


