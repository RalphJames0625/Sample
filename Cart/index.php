<?php 
    session_start();
    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    $sql = "SELECT p.*,pdi.img from products p
                    INNER JOIN product_images pdi ON pdi.product_id = p.id
                    WHERE pdi.is_featured = 1";
    $handle = $db->prepare($sql);
    $handle->execute();
    $getAllProducts = $handle->fetchAll(PDO::FETCH_ASSOC);

    $pageTitle = 'Cool T-Shirt Shop';
	$metaDesc = 'Demo PHP shopping cart get products from database';
    include('layouts/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <?php
        foreach($getAllProducts as $product)
        {
            $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($product['product_name']))."/".$product['img'];
        ?>
            <div id="try" class="col-md-3 mt-2 ">
                <div class="card">
                     <a href="single-product.php?product=<?php echo $product['id']?>">
                        <img class="card-img-top" src="<?php echo $imgUrl ?>" alt="<?php echo $product['product_name'] ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="single-product.php?product=<?php echo $product['id'] ?>">
                                <?php echo $product['product_name']; ?>
                            </a>
                        </h5>
                        <strong>$ <?php echo $product['price']?></strong>

                        <p class="card-t">
                            <?php echo substr($product['short_description'],0,50) ?>'...
                        </p>
                        <p class="card-text">
                            <a href="single-product.php?product=<?php echo $product['id']?>" class="btn btn-primary btn-sm">
                                View
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
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
</head>
<style>

.container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-right: 40px
}
 
body{
    background: linear-gradient(-45deg, #302e49, #813e58, #2e5f70, #2d7766);
	background-size: 400% 400%;
	animation: gradient 9s ease infinite;
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
  opacity: .9;
}

img {
  border:solid black;
  border-width: 0 0 4px;
}

.card{
    
    box-sizing: border-box;
    border-radius: 3px;
    border-style: solid;
    border-color: black;
    border-width: 4px;
}

.card-title{
    text-align: center;
}



 
    </style>

<body>
    
</body>
</html>
