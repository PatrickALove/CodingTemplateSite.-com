<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/IT_styles.css">
</head>

<body>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="container">
            <div class="flex-col-c-c p-b-50">
                <div class="tibold-1 color-3 txt-center m-b-11">
                    <h2 style="margin-top: 50px;text-align:left;">Register</h2>
                </div>
            </div>
        </div>
        <div class="input-group">
            <label class="label">Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label class="label">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label class="label">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label class="label">Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p class="label">
            Already a member? <a class="color-11" href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>
