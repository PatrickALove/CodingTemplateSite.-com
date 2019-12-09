<!DOCTYPE html>

<html lang="en">

<head>
    <title>[SITE NAME] | Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
    <?php include('header.php'); ?>

    <!-- Title page -->
    <section class="bg-img1 pkg-overlay1" style="background-image: url(images/bg-09.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="tibold-1 text-uppercase color-0 txt-center m-b-25">
                Shop
            </h2>

            <div class="flex-wr-c-c">
                <a href="index.php" class="breadcrumb-item">
                    Home
                </a>

                <span class="breadcrumb-item">
                    Shop
                </span>
            </div>
        </div>
    </section>

    <!-- DELETE ACCOUNT MODAL -->
    <?php include('deleteAccount.php'); ?>

    <!-- Content -->
    <div class="bg-0 p-t-85 p-b-50">
        <div class="container">
            <div class="bo-b-1 bdrcolor-12 m-b-30">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-4 col-lg-3 flex-s-c p-b-15">
                        <!-- Search -->
                        <form class="flex-wr-c-c w-100">
                            <input class="size-a-21 bg-none tisubtxt-5 color-6 plh-6 bo-tbl-1 bdrcolor-11 p-rl-20" type="text" name="search" placeholder="Search...">

                            <button class="size-a-22 fs-18 color-0 bg-11 hov-btn1 trans-02">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-9 flex-e-c p-b-15">

                        <!-- Cart -->
                        <div class="flex-s-e cart">
                            <?php

require_once("./shopping-cart/dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>



                            <!-- Cart content -->
                            <div class="cart-content trans-02">
                                <div class="cart-product">
                                    <ul class="cart-product-wrap-item">

                                        <li class="cart-product-item flex-sb-s pos-relative">

                                            <?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>

                                            <?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
                                        <li class="cart-product-item flex-sb-s pos-relative">
                                            <button class="">
                                                <a href="shop.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction fa fa-close cart-product-item-close ab-t-r flex-c-c fs-13 color-5 hov-link2 trans-02 p-all-12" alt="Remove Item"></a>
                                            </button>

                                            <img src="<?php echo $item["image"]; ?>" class="cart-item-image" />

                                            <div class="cart-product-text align-self-center pos-relative">
                                                <a href="shop-detail.html" class="d-inline-block tisubtxt-5 text-uppercase color-3 hov-link2 trans-02 m-r-35">
                                                    <?php echo $item["name"]; ?>
                                                </a>

                                                <span class="d-block tisubtxt-6 color-6">
                                                    <?php echo $item["quantity"]; ?> x $<?php echo $item["price"]; ?>
                                                </span>
                                            </div>
                                        </li>


                                        <?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>



                                        <?php
} else {
?>
                                        <div class="no-records">Your Cart is Empty</div>
                                        <?php 
}
?>

                                        </li>


                                    </ul>
                                </div>

                                <div class="cart-total tisubtxt-2 txt-right p-t-5 p-b-13">
                                    <span class="color-3">
                                        Subtotal:
                                    </span>

                                    <span class="color-6 bo-b-1 bdrcolor-12">
                                        <?php if(isset($_SESSION["cart_item"])){ ?>
                                        <?php echo "$ ".number_format($total_price, 2); ?>
                                        <?php } else { echo "$0.00";}; ?>
                                    </span>
                                </div>


                                <div class="cart-wrap-btn flex-wr-sb-c">
                                    <a href="shop-cart.html" class="cart-btn flex-c-c tisubtxt-2 text-uppercase color-14 bg-0 bo-all-2 bdrcolor-12 hov-btn1 trans-02">
                                        View Cart
                                    </a>

                                    <a href="#" class="cart-btn flex-c-c tisubtxt-2 text-uppercase color-0 bg-11  bo-all-2 bdrcolor-14 hov-btn1 trans-02">
                                        Check Out
                                    </a>
                                    <a class="cart-btn flex-c-c tisubtxt-2 text-uppercase color-14 bg-0 bo-all-2 bdrcolor-12 hov-btn1 trans-02" id="btnEmpty" href="shop.php?action=empty">Empty Cart</a>
                                </div>
                            </div>
                            <div class="pos-relative m-r-12">
                                <img src="images/icons/icon-cart.png" alt="IMG">

                                <span class="flex-c-c s-full ab-t-l tisubtxt-2 color-0 p-t-7">
                                    <?php if(isset($_SESSION["cart_item"])){ ?>
                                    <?php echo $total_quantity; ?>
                                    <?php } else { echo "0";}; ?>
                                </span>

                            </div>
                            <span class="timixed-7 color-6 m-b--5">
                                <?php if(isset($_SESSION["cart_item"])){ ?>
                                <?php echo "$ ".number_format($total_price, 2); ?>
                                <?php } else { echo "$0.00";}; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-4 col-lg-3 p-b-50">
                    <!-- Left bar -->
                    <div class="m-t--4">
                        <!-- Categories -->
                        <div class="p-b-8">
                            <h4 class="timixed-1 text-uppercase color-3 pkg-underline1 p-b-6">
                                Categories
                            </h4>

                            <ul class="p-t-22">
                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            All Shop
                                        </span>

                                        <span>
                                            <?php 
                                            $product_con = mysqli_connect('localhost', 'root', '', 'tblproduct');
                                            $prod_sql = "SELECT COUNT(*) AS total FROM tblproduct";
                                            $rs = mysqli_query($product_con,$prod_sql);
                                            $values = mysqli_fetch_assoc($rs);
                                            $num_rows=$values['total'];
                                            echo $num_rows; ?>
                                        </span>
                                    </a>
                                </li>

                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            SSI Products
                                        </span>

                                        <span>
                                            <?php
                                            $code_sql = "SELECT COUNT(*) AS codeSSI FROM tblproduct WHERE code='SSI01'";
                                            $rs = mysqli_query($product_con,$code_sql);
                                            $values = mysqli_fetch_assoc($rs);
                                            $num_rows=$values['codeSSI'];
                                            echo $num_rows;
                                            ?>
                                        </span>
                                    </a>
                                </li>

                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            CSV Programs
                                        </span>

                                        <span>
                                            <?php
                                            $code_sql2 = "SELECT COUNT(*) AS codecsv FROM tblproduct WHERE code LIKE 'csv%'";
                                            $rsw = mysqli_query($product_con,$code_sql2);
                                            $values = mysqli_fetch_assoc($rsw);
                                            $num_rows=$values['codecsv'];
                                            echo $num_rows;
                                            ?>
                                        </span>
                                    </a>
                                </li>

                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            Templates
                                        </span>

                                        <span>
                                            <?php
                                            $code_sql2 = "SELECT COUNT(*) AS codecsv FROM tblproduct WHERE code LIKE '%Temp%'";
                                            $rsw = mysqli_query($product_con,$code_sql2);
                                            $values = mysqli_fetch_assoc($rsw);
                                            $num_rows=$values['codecsv'];
                                            echo $num_rows;
                                            ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            CSS Resources
                                        </span>

                                        <span>
                                            <?php
                                            $code_sql2 = "SELECT COUNT(*) AS cssR FROM tblproduct WHERE code LIKE '%CSSR%'";
                                            $rsw = mysqli_query($product_con,$code_sql2);
                                            $values = mysqli_fetch_assoc($rsw);
                                            $num_rows=$values['cssR'];
                                            echo $num_rows;
                                            ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="bo-b-1 bdrcolor-14 m-b-18">
                                    <a href="#" class="flex-wr-sb-c tisubtxt-5 color-5 hov-link2 trans-02 p-tb-3">
                                        <span>
                                            Tutorials
                                        </span>

                                        <span>
                                            <?php
                                            $code_sql2 = "SELECT COUNT(*) AS tuts FROM tblproduct WHERE code LIKE '%VT%'";
                                            $rsw = mysqli_query($product_con,$code_sql2);
                                            $values = mysqli_fetch_assoc($rsw);
                                            $num_rows=$values['tuts'];
                                            echo $num_rows;
                                            ?>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Filter -->
                        <div class="p-b-8">
                            <h4 class="timixed-1 text-uppercase color-3 pkg-underline1 p-b-6">
                                Filter By Price (COMING SOON)
                            </h4>

                            <div class="p-t-30">
                                <div class="rs1-select2 rs2-select2">
                                    <p>The field below has been disabled until the feature is functioning. <br><br></p>
                                    <select class="js-select2" name="filter-price" disabled>
                                        <option>Ascending Price</option>
                                        <option>Price Decreases</option>
                                        <option>The Latest</option>
                                        <option>Alphabetically</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-9 p-b-50">
                    <div id="product-grid">
                        <div class="txt-heading">Products</div>
                        <?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
                        <div class="product-item">
                            <form method="post" action="shop.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                                <div class="product-tile-footer">
                                    <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                                </div>
                            </form>
                        </div>
                        <?php
		}
	}
	?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include('footerSub.php'); ?>


    <!--===============================================================================================-->
    <script src="web_resources/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="web_resources/bootstrap/js/popper.js"></script>
    <script src="web_resources/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="web_resources/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
