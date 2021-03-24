<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
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
            <img src="./img/single-product-1.png" class="img_product">
            <div class="pod_gallery_product">
                <img src="./img/single-product-1.png" class="img_product">
                <img src="./img/single-product-2.png" class="img_product">
                <img src="./img/single-product-3.png" class="img_product">
            </div>
        </div>
        <div class="inf_product">
            <h3 class="zag_product">Chocolate Truffles</h3>
            <p class="cena_product">$23</p>
            <p class="txt_product">Lorem ipsum dolor sit amet, ei impetus epicurei his, ne falli erant consequuntur est. Mei simul aperiam eu, an rebum regione ponderum mel. Facer placerat ut duo, id duis solum maiorum vis, vim autemsemper docendi cu.</p>
            <ul class="txt_product">
                <li>
                    <span>Categories:</span>
                    <span>Sweets</span>
                </li>
                <li>
                    <span>Weight:</span>
                    <span>7,25 oz</span>
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