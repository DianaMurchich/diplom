<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="icon" href="./img/icon.png">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./css_file/blog_post.css">
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
    require_once('./nav_menu.php')
    ?>
    <div class="fon_1">
        <h2>blog post</h2>
    </div>
    <div class="pod_menu">
        <ul>
            <li><a href="./cake.php">home</a></li>
            <span class="fa fa-arrow-right"></span>
            <li><a href="./blog.php">blog</a></li>
            <span class="fa fa-arrow-right"></span>
            <li>blog post</li>
        </ul>
    </div>
    <div class="blog">
        <div class="stolb1">
            <p class="data2">August 9, 2020</p>
            <h2 class="zag_post">How to Pipe a Fluffy Frosting Border on a Cake</h2>
            <img src="./img/blog/post.jpg" class="img_post">
            <p class="post">Facilisis mauris sit amet massa. Id faucibus nisl tincidunt eget nullam. Mus mauris vitae ultricies leo integer malesuada. Aliquam sem fringilla ut morbi tincidunt augue interdum. Sagittis orci a scelerisque purus semper eget duis at.</p>
            <p class="post">Bibendum at varius vel pharetra vel. Vestibulum mattis ullamcorper velit sed ullamcorper morbi. Aliquet nec ullamcorper sit amet. Eu sem integer vitae justo eget magna fermentum. Vitae ultricies leo integer malesuada nunc. Etiam sit amet nisl
                purus in mollis.</p>

            <h2 class="zag_coments">Leave a comment</h2>
            <form class="comentary">
                <div>
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>
                <textarea placeholder="Messange" class="sms"></textarea>
                <button class="btn2 btn_width">send message</button>
            </form>
        </div>
    </div>
    <?php
    require_once('./podval.php');
    ?>
</body>

</html>