<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspire Norfolk - Leading a generation into work</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="css/pushy.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/145bf61ced.js" crossorigin="anonymous"></script>
</head>
    <body>
        <?php
            if(!function_exists("setPage")){
                function setPage() {
                    if (empty($_GET['page'])){
                        return "./pages/landing-page.php";
                    } else{
                        return $_GET['page'];
                    }
                }
            }
            $page = setPage();
        ?>

        <!-- Pushy Menu -->
        <nav id="sideRightPushy" class="pushy pushy-right">
            <ul>
                <a class="nav-link" href="./index.php?page=pages/about-us.php">About Us</a>
                <a class="nav-link" href="./index.php?page=pages/our-services.php">Our Services</a>
                <a class="nav-link" href="./index.php?page=./pages/testimonials.php">Testimonials</a> 
                <a class="nav-link" href="./index.php?page=./pages/contact-us.php">Contact Us</a>
                <a class="nav-link" href="01603670909">
                    <i class="fas fa-phone"></i>
                    <strong>01603 670909</strong>
                </a>
            </ul>
        </nav>

        <!-- Pushy Container -->
        <div id="container">

            <!-- Site Content -->
            <?php
                include "header.php";
                include "$page";
                include "footer.php";
            ?>

        </div>
        
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/app.js"></script>

        <script src="js/pushy.js"></script>
        <script >
            var optionSideRight = {
                button: "side-right-pushy-button",
                container: "container",
                containerPush: true,
                menuPosition: "right",
                menuOpen: false,
                overlayShow: true
            };
            $("#sideRightPushy").Pushy(optionSideRight);
        </script>
    </body>
</html>