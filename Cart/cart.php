<?php 
    session_start();
    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    if(isset($_GET['action'],$_GET['item']) && $_GET['action'] == 'remove')
    {
        unset($_SESSION['cart_items'][$_GET['item']]);
        header('location:cart.php');
        exit();
    }
	
	$pageTitle = 'Demo PHP Shopping cart - Add to cart using Session';
	$metaDesc = 'Demo PHP Shopping cart - Add to cart using Session';
	
    include('layouts/header.php');

    //pre($_SESSION);
?>
<div class="container">
<div class="row justify-content-center">
    <div class="col-11">
        <?php if(empty($_SESSION['cart_items'])){?>
        <table class="table">
            <tr>
                <td>
                    <p>Your cart is empty</p>
                </td>
            </tr>
        </table>
        <?php }?>
        <?php if(isset($_SESSION['cart_items']) && count($_SESSION['cart_items']) > 0){?>
        <table class="table ">
           <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $totalCounter = 0;
                    $itemCounter = 0;
                    foreach($_SESSION['cart_items'] as $key => $item){

                     $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($item['product_name']))."/".$item['product_img'];   
                    
                    $total = $item['product_price'] * $item['qty'];
                    $totalCounter+= $total;
                    $itemCounter+=$item['qty'];
                    ?>
                    <tr>
                        <td>
                            <img src="<?php echo $imgUrl; ?>" class="rounded img-thumbnail mr-2" style="width:60px;"><?php echo $item['product_name'];?>
                            </div>
                            <a href="cart.php?action=remove&item=<?php echo $key?>" class="text-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>

                        </td>
                        <td>
                            $<?php echo $item['product_price'];?>
                        </td>
                        <td>
                            <input type="number" name="" class="cart-qty-single" data-item-id="<?php echo $key?>" value="<?php echo $item['qty'];?>" min="1" max="1000" >
                        </td>
                        <td>
                            <?php echo $total;?>
                        </td>
                    </tr>
                <?php }?>
                <tr class="border-top border-bottom">
                    <td><button class="btn btn-danger btn-sm" id="emptyCart">Clear Cart</button></td>
                    <td></td>
                    <td>
                        <strong>
                            <?php 
                                echo ($itemCounter==1)?$itemCounter.' item':$itemCounter.' items'; ?>
                        </strong>
                    </td>
                    <td><strong>$<?php echo $totalCounter;?></strong></td>
                </tr> 
                </tr>
            </tbody> 
        </table>
        <div class="row">
            <div class="col-md-12">
				<a href="checkout.php">
					<button class="btn btn-primary btn-lg float-right">Checkout</button>
				</a>
            </div>
        </div>
        
        <?php }?>
    </div>
</div>
</div>
<?php include('layouts/footer.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        th {
  background-color: #04AA6D;
  color: white;
  
}
table, th, td {
  border: 1px solid;
}



p{
    text-align: center;
}
.container{
    min-height: 100vh;
   
    align-items: center;
    justify-content: center;
    position: relative;
    margin-right: 40px
}



        </style>
</head>
<body>
    
</body>
</html>