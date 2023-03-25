<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://kit.fontawesome.com/7ff49dcf72.css" crossorigin="anonymous">

</head>
<body>



<nav class="main-menu">

<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="" disabled>
<i class="fa fa-home fa-1.5x"></i>
<span class="nav-text">Home</span>
</a>
</li>   
       
                     
</li>
<li class="darkerlishadow">
<a href="Cart/index.php">
<i class="fa fa-gamepad fa-1.5x"></i>
<span class="nav-text">Products</span>
</a>
</li>
  

<li class="darkerli">
<a href="Cart/cart.php">
<i class="fa fa-cart-shopping fa-1.5x "></i>
<span class="nav-text">Cart</span>
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
        
  
<div class="container">

   <div class="content">
   <img src="Image/cover1.jpg">
      <h3>hi, <span> WELCOME TO GAME TIME </span></h3>
      <p>PS5, PC, NINTENDO SWITCH. <br>
         Whatever platforms you have, we have the best for you! You are always connected with us!</p>
      
      
      
   </div>

</div>
			
  
  <script src="https://kit.fontawesome.com/7ff49dcf72.js" crossorigin="anonymous"></script>
</body>
</html>


