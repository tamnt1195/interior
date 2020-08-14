<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FE HOME</title>
    <!-- <link rel="icon" href="view/img/favicon.png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="view/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="view/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="view/css/flaticon.css">
    <link rel="stylesheet" href="view/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="view/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="view/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <?php
        include_once "model/autoLoad.inc.php";

        include_once "view/header.php";
        
        $ctr = 'home';
        if(isset($_GET['ctr'])) $ctr = $_GET['ctr'];
        include_once "controller/".$ctr."Controller.php";;

        include_once "view/footer.php";
    ?>




    <!-- jquery plugins here-->
    <script src="view/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="view/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="view/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="view/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="view/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="view/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="view/js/owl.carousel.min.js"></script>
    <script src="view/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="view/js/slick.min.js"></script>
    <script src="view/js/jquery.counterup.min.js"></script>
    <script src="view/js/waypoints.min.js"></script>
    <script src="view/js/contact.js"></script>
    <script src="view/js/jquery.ajaxchimp.min.js"></script>
    <script src="view/js/jquery.form.js"></script>
    <script src="view/js/jquery.validate.min.js"></script>
    <script src="view/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="view/js/custom.js"></script>
</body>

</html>