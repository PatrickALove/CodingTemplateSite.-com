<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/IT_styles.css">
</head>

<body>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
            </h3>
        </div>
        <?php endif ?>
        <div class="container">
            <div class="flex-col-c-c p-b-50">
                <div class="tibold-1 color-3 txt-center m-b-11">
                    <h2 style="margin-top: 50px;text-align:left;">Login</h2>
                </div>
            </div>
        </div>
        <div class="input-group">
            <label class="label">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label class="label">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p class="label">
            Not yet a member? <a class="color-11" href="register.php">Sign up</a>
        </p>
        <p class="label">
            <i><a class="color-11" style="float:right;" href="index.php">Back to Homepage</a></i>
        </p>
        <br>
    </form>
</body>

</html>
