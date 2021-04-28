<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" href="./img/icon.png">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./css_file/shop_css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require_once('./nav_menu.php');
    ?>
    <div class="fon_1">
        <h2>shop</h2>
    </div>
    
    <div class="pod_menu">
        <ul>
            <li><a href="./cake.php">home</a></li>
            <span class="fa fa-arrow-right"></span>
            <li>shop</li>
        </ul>
    </div>
    <div class="telo">
        <div class="block_dop_menu">
            <div>
                <h3 class="zagolovok">Filter by Price</h3>
                <input type="range" id="volume" name="volume" min="0" max="2000" step="10">
                <div></div>
            </div>
            <div>
                <form>
                    <h3 class="zagolovok">Categories</h3>
                    <p><input type="checkbox" value="all">All</p>
                    <p><input type="checkbox" value="cakes">Cakes</p>
                    <p><input type="checkbox" value="puddings">Puddings</p>
                    <p><input type="checkbox" value="sweets">Sweets </p>
                </form>
            </div>
            <div>
                <form>
                    <input type="text" placeholder="Искать здесь...">
                    <button type="submit"></button>
                </form>
            </div>
            <div>
                <h3 class="zagolovok">Popular products</h3>
                <div class="populyr_product">
                    <img src="./img/Shop/product-mini-populyr.png" class="img_populyr">
                    <div class="txt_populyr">
                        <p>Chocolate Pudding</p>
                        <p>$25.00</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="block_produckt">
            <?php
            require_once("./app/connect.php");
            $data = $conn->prepare("SELECT * FROM diana.product");
            $data->execute();

            foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
                // перебираем в цикле данные из запроса сразу после получения не сохраняя в переменную
                echo <<<doc
    <div class='product'>
                <img src="{$value['url_img']}" class="img_product">
                <a href="./single_product.php?product={$value['id']}" class="nazvanie">{$value['name']}</a>
                <p class="cena">{$value['price']} руб./кг</p>
                </div>
    doc;
            };
            ?>

            <!-- <div class='product'>
                <img src="./img/Shop/product-5-187x155.png" class="img_product">
                <a href="./single_product.html" class="nazvanie">Fairytale Brownies</a>
                <p class="cena">$23.00</p>
            </div> -->
        </div>

    </div>
    <?php
    require_once('./podval.php');
    ?>

</body>

</html>