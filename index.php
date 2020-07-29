<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspire Norfolk - Leading a generation into work</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
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
    <?php
        include "header.php";
        include "$page";
        include "footer.php";
    ?>
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>