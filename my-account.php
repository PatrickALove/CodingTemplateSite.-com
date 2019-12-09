<?php include("header.php");?>

<body>
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <div class="row justify-content-left">
                <nav>
                    <ul>
                        <li class="sidepanel">
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Orders</a>
                        </li>
                        <li>
                            <a href="#">Downloads</a>
                        </li>
                        <li>
                            <a href="#">Addresses</a>
                        </li>
                        <li>
                            <a href="#">Payment methods</a>
                        </li>
                        <li>
                            <a href="#">Account details</a>
                        </li>
                        <li>
                            <a href="index.php?logout=\'1\'"> Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- DELETE ACCOUNT MODAL -->
            <?php include('deleteAccount.php'); ?>

            <div>
                <div><br><br></div>
                <p>Hello <strong><?php  if (isset($_SESSION['username'])) {echo $_SESSION["username"];}?></strong> (not <strong><?php  if (isset($_SESSION['username'])) {echo $_SESSION["username"];}?></strong>? <a href="index.php?logout=\'1\'"> [Logout]</a>)</p>

                <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>

            </div>
        </div>
    </section>
    <?php include('footerGallery.php'); ?>
    <!--===============================================================================================-->
    <script src="web_resources/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/bootstrap/js/popper.js"></script>
    <script src="web_resources/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="web_resources/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="web_resources/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/revo-custom.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/parallax100/parallax100.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/waypoint/jquery.waypoints.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/countterup/jquery.counterup.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>
