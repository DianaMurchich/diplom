<!DOCTYPE html>
<html lang="en">
<?php
        require_once("./app/connect.php");
        $id = (int)$_GET['product'];
        $data = $conn->prepare("SELECT * FROM diana.product WHERE id = $id");
        $data->execute();
        
        $result = $data->fetch(PDO::FETCH_ASSOC); 
            // перебираем в цикле данные из запроса сразу после получения не сохраняя в переменную
       
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result["name"]?></title>
    <link rel="icon" href="./img/icon.png">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./css_file/single_product.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once('./nav_menu.php');
    ?>

    <div class="fon_1">
        <h2>Single Product</h2>
    </div>
    <div class="pod_menu">
        <ul>
            <li><a href="./cake.php">home</a></li>
            <span class="fa fa-arrow-right"></span>
            <li><a href="./shop.php">shop</a></li>
            <span class="fa fa-arrow-right"></span>
            <li>Single Product</li>
        </ul>
    </div>
    <div class="bloc_product">
        <div class="foto_product">
            <img src="<?php echo $result["url_img"]?>" class="osnov_img">
            <div class="pod_gallery_product">
                <img src="<?php echo $result["url_img"]?>" class="img_product">
                <img src="./img/single-product-2.png" class="img_product">
                <img src="./img/single-product-3.png" class="img_product">
            </div>
        </div>
        <div class="inf_product">
    
            <h3 class="zag_product"><?php echo $result["name"]?></h3>
            <p class="cena_product"><?php echo $result["price"]?> руб/кг</p>
            <p class="txt_product"><?php echo $result["description"]?></p>
            <ul class="txt_product">
                <li>
                    <span>Categories:</span>
                    <span><?php echo $result["categories"]?></span>
                </li>
                <li>
                    <span>Weight:</span>
                    <span><?php echo $result["weight"]?></span>
                </li>
                <li>
                    <span>Box:</span>
                    <span>60 x 60 x 90 cm </span>
                </li>
            </ul>
            <div>
                <div>
                    <input type="number" value="1" min="1" max="100">
                    <div>
                        <button class="">+</button>
                        <button>-</button>
                    </div>
                </div>
                <button class="btn2">add to cart</button>
            </div>
        </div>
    </div>
    <div class="pole">
        <form>
            <div class="osnov_forma">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Phone">
                <textarea placeholder="Messange" class="sms"></textarea>
            </div>
            <button class="btn2">send message</button>
        </form>
    </div>
    <?php
    require_once('./podval.php');
    ?>
</body>

</html>