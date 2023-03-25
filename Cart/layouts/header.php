<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($pageTitle)?$pageTitle:'PHP Shopping Cart')?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/admin3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/7ff49dcf72.css" crossorigin="anonymous">
</head>
<body>

<nav class="main-menu">
<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
            <ul>
 
<li class="darkerlishadow">
<a href="/Sample/user_page.php">
<i class="fa fa-house fa-1.5x"></i>
<span class="nav-text">My Home</span>
</a>
</li>

<li class="darkerli">
<a href="index.php">
<i class="fa fa-gamepad fa-1.5x"></i>
<span class="nav-text">Products</span>
</a>
</li>


<li class="darkerlie">
<a href="cart.php">
<i class="fa fa-cart-shopping fa-1.5x"></i>
<span class="nav-text">My Cart</span>
</a>
</li>
                
            </ul>
            
            
                    <?php 
                        echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
                    ?>
                </a>
            </div>
            
        </nav>

        <script src="https://kit.fontawesome.com/7ff49dcf72.js" crossorigin="anonymous"></script>
