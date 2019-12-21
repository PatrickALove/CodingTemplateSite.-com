<!DOCTYPE html>
<html lang="en">
<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
if($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/about.php'){
    $Title = "About Us";
}
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/index.php') {
        $Title = "IT: Coding Templates and More";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/login.php') {
        $Title = "Login Page";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/index.php') {
        $Title = "IT: Coding Templates and More";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/index.php') {
        $Title = "IT: Coding Templates and More";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/my-account.php') {
        $Title = "Account Page";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/contact-us.php') {
        $Title = "Contact Us";
    }
    elseif($_SERVER['REQUEST_URI']=='/CodingSiteTemplate.com/includes/contact-form.php') {
        $Title = "Contact Form Submission";
    }
?>

<head>
    <title><?php echo $Title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/ITClub.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="web_resources/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="web_resources/revolution/css/settings.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="web_resources/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/IT_styles.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header">
        <!-- Header desktop -->
        <nav class="container-header-desktop">
            <div class="top-bar">
                <div class="content-topbar container flex-sb-c h-full">
                    <div class="size-w-0 flex-wr-s-c">
                        <div class="tisubtxt-1 color-13 m-r-50">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            <span class="size-w-4"><a class="color-11" href="https://www.google.com/maps/place/The+White+House/@38.8976805,-77.0387185,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7b7bcdecbb1df:0x715969d86d0b76bf!8m2!3d38.8976763!4d-77.0365298">1600 Pennsylvania Ave NW, Washington, DC 20500</a>
                                </span>
                        </div>

                        <div class="tisubtxt-1 color-13 m-r-50">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <span><a class="color-11" href="tel:11111111111">(+1) 111 111 1111</a></span>
                        </div>

                        <div class="tisubtxt-1 color-13 m-r-50">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>Mon-Fri 08:00 am - 05:00 pm</span>
                        </div>
                    </div>

                    <div class="text-nowrap fa fa-user" style="color: white;">

                        <?php  if (isset($_SESSION['username'])) {echo '<span>' .$_SESSION["username"]. ' <li> <div class="account-menu">
                        <a href="my-account.php">My Account</a>
                        <a href=""  data-toggle="modal" data-target="#deleteAccount">Delete Account</a>
                        
                        </div></li></span>
                        
                        <a href="index.php?logout=\'1\'" style="color:red;"> [Logout]</a>';}
                        else {
                            echo '<a class="ul li a" href="login.php">[Login]</a>';}
                        ?>


                        <a href="https://www.facebook.com/Azumatt/?eid=ARB8F9fqv4DdUBYbTUI97N4xFxv_50LOAvsS15YX5jY-sWI_5oeKcY5Z0NQ6BSwzUyCAnKNMgHCW_CE2" class="fs-16 color-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="https://twitter.com/Azumattdev" class="fs-16 color-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-twitter"></i>
                        </a>


                        <a href="https://www.linkedin.com/in/patrick-a-love/" class="fs-16 color-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <div class="limiter-menu-desktop container">

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu respon-sub-menu left">
                            <li>
                                <a href="index.php">Home</a>

                            </li>

                            <li>
                                <a href="about.php">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="contact-us.php">Contact Us</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="services-list.html">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Services List</a></li>
                                    <li>
                                        <a href="#">Services Detail</a>

                                        <ul class="sub-menu">
                                            <li><a href="#">Coding Video Tutorials</a></li>
                                            <li><a href="#">Template Downloads</a></li>
                                            <li><a href="#">Template Walkthroughs</a></li>
                                            <li><a href="#">Help Documentation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Logo desktop -->
                        <a class="ITLogo" href="index.php"><img src="images/icons/ITClub2.png" alt="LOGO"></a>

                        <ul class="main-menu respon-sub-menu right">
                            <li>
                                <a href="news-grid.html">News</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Fix Errors</a></li>
                                    <li><a href="#">Coding News</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="projects-grid.html">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="#">All Projects</a></li>
                                    <li>
                                        <a href="#">Projects Detail</a>

                                        <ul class="sub-menu">
                                            <li><a href="#">Coding Projects</a></li>
                                            <li><a href="#">Template Projects</a></li>
                                            <li><a href="#">Template Documentation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header Mobile -->
        <nav class="container-header-mobile">
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="index.php"><img src="images/icons/ITClub.png" alt="LOGO"></a>
                </div>


                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>

            <div class="menu-mobile">
                <ul class="top-bar-m p-l-20 p-tb-8">
                    <li>

                        <div class="tisubtxt-1 color-5 p-tb-3">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            <span><a href="https://www.google.com/maps/place/The+White+House/@38.8976805,-77.0387185,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7b7bcdecbb1df:0x715969d86d0b76bf!8m2!3d38.8976763!4d-77.0365298">1600 Pennsylvania Ave NW, Washington, DC 20500</a></span>
                        </div>
                    </li>

                    <li>
                        <div class="tisubtxt-1 color-5 p-tb-3">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <span><a href="tel:11111111111">(+1) 111 111 1111</a></span>
                        </div>
                    </li>

                    <li>
                        <div class="tisubtxt-1 color-5 p-tb-3">
                            <span class="fs-16 m-r-6">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>Mon-Fri 08:00 am - 5:00 pm</span>
                        </div>
                    </li>

                    <li>
                        <div>
                            <a href="#" class="fs-16 color-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-facebook-official"></i>
                            </a>

                            <a href="#" class="fs-16 color-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-16 color-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="fs-16 color-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-16 color-5 hov-link2 trans-02 m-r-15">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
