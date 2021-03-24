<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="./img/icon.png">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./css_file/contact_us_css.css">
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
        <h2>contact us</h2>
    </div>
    <div class="pod_menu">
        <ul>
            <li><a href="./cake.php">home</a></li>
            <span class="fa fa-arrow-right"></span>
            <li>contact us</li>
        </ul>
    </div>
    <div class="forma">
        <div class="zag_forma">
            <h1 class="txt_zag_forma">Get in touch</h1>
            <p class="txt_forma">We are available 24/7 by fax, e-mail or by phone. You can also use our<br> quick contact form to ask a question about our products.</p>
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
    </div>
    <div class="contact">
        <div class="contact_block">
            <div>
                <h3 class="zag_contact">Phones</h3>
                <p class="txt_contact">+ 99999999999</p>
            </div>
            <div>
                <h3 class="zag_contact">Address</h3>
                <p class="txt_contact">523 Sylvan Ave, 5th Floor<br> Mountain View, CA 94041 USA</p>
            </div>
            <div>
                <h3 class="zag_contact">E-mails</h3>
                <p class="txt_contact">info@demolink.org</p>
            </div>
        </div>
    </div>
    <?php
    require_once('./podval.php');
    ?>
</body>

</html>