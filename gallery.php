<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="icon" href="./img/icon.png">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./css_file/gallery_css.css">
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
        <h2>gallery</h2>
    </div>
    <div class="pod_menu">
        <ul>
            <li><a href="./cake.php">home</a></li>
            <span class="fa fa-arrow-right"></span>
            <li>gallery</li>
        </ul>
    </div>
    <div class="kategory">
        <ul>
            <li>all categories</li>
            <li>cakes</li>
            <li>cupcakes</li>
        </ul>
    </div>
    <div class="gallery">
        <a class="cake1" href=""><img src="./img/gallery/foto1.jpg"></a>
        <a class="cake2" href=""><img src="./img/gallery/foto2.jpg"></a>
        <a class="cake3" href=""><img src="./img/gallery/foto3.jpg"></a>
        <a class="cake4" href=""><img src="./img/gallery/foto4.jpg"></a>
        <a class="cake5" href=""><img src="./img/gallery/foto5.jpg"></a>
        <a class="cake6" href=""><img src="./img/gallery/foto6.jpg"></a>
    </div>
    <div class="otdelka"></div>
    <?php
    require_once('./podval.php');
    ?>
</body>

</html>