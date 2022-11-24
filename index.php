<?php 
       session_start();

       if(isset($_POST['cart'])){
            $cart = $_POST['cart'];

            $_SESSION['cart'] = $cart;
    
 
 
 

       };

 
       $products = array(
           "Product 1" => array(
               'name' => 'Black V-Neck Tee',
               "image1" => "1a",
               "image2" => "1b",
               'price' => 500
           ),
           "Product 2" => array(
               'name' => 'Under Armour Tee',
               "image1" => "2a",
               "image2" => "2b",
               'price' => 800
           ),
           "Product 3" => array(
               'name' => 'Orange V-Neck Tee',
               "image1" => "3a",
               "image2" => "3b",
               'price' => 500
           ),
           "Product 4" => array(
               'name' => 'Gray Pocket Tee',
               "image1" => "4a",
               "image2" => "4b",
               'price' => 600
           ),
           "Product 5" => array(
               'name' => 'Black Pocket Tee',
               "image1" => "5a",
               "image2" => "5b",
               'price' => 600
           ),
           "Product 6" => array(
               'name' => 'Yellow Pocket Tee',
               "image1" => "6a",
               "image2" => "6b",
               'price' => 600
           ),
           "Product 7" => array(
               'name' => 'Orange Pocket Tee',
               "image1" => "7a",
               "image2" => "7b",
               'price' => 600
           ),
           "Product 8" => array(
               'name' => 'Brown Pocket Tee',
               "image1" => "8a",
               "image2" => "8b",
               'price' => 600
           )
           
       );
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css../styles.css">
    <title>I Tee | Products</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">
                <h3 class="px-5">
                <i class="fas fa-tshirt px-3"></i> I Tee
                </h3>   
            </a>
            <button class="navbar-toggler"
                type="button"
                    data-toggle="collapse"
                    data-target = "#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="mr-auto"></div>
                <div class="navbar-nav">
                    <a href="cart.php" class="nav-item nav-link active">
                        <h5 class="px-5 cart">
                            <i class="fa fa-shopping-cart"></i> Cart
                            <?php
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                            ?>
                        </h5>
                    </a>
                </div>
            </div>

        </nav>
        <div class="container my-5">        
            <div class="row">

            <?php foreach ($products as $key => $value) { ?>
                    <div class="col-md-3 col-sm-6">
                        <form method="post">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="description.php" target="_self">
                                    <img class="pic-1" src="/img../shirt<?php echo $products[$key]["image1"];?>.jpg">
                                    <img class="pic-2" src="/img../shirt<?php echo $products[$key]["image2"];?>.jpg">
                                </a>
                                <input type="submit" name="cart[]" value="Add to cart" class="add-to-cart">
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#"><?php echo $products[$key]['name'];?></a></h3>
                                <span class="price">$<?php echo $products[$key]['price'];?></span>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>    
</html>