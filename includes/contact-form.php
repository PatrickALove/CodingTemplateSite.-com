<?php
header( "refresh:5;../contact-us.php" );

// connect to database
$db_connection = mysqli_connect('localhost','root','') 
or
die(mysqli_connect_error());

//check connection
if(!$db_connection) {
    die("Connection Failed: " . mysqli_connect_error());
}



$name = $_POST['name'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$message =  $_POST['msg'];

// sql query initialization
$sql = "INSERT INTO  `contactform`.`forminfo` (name, email, phone, msg) VALUES ('$name', '$email', '$phone', '$message')";

// Database Creation query
$createDB = "CREATE DATABASE IF NOT EXISTS contactform";

// Table Creation query
$createTable = "CREATE TABLE IF NOT EXISTS `contactform`.`forminfo` (
  `forminfoID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

// Create database if not exist
if (mysqli_query($db_connection, $createDB)) {
    // create table if not exist
    if (mysqli_query($db_connection, $createTable)) {
            // Insert values into the table
            if (mysqli_query($db_connection, $sql)) {
                echo "<form><div class='flex-col-c-c p-b-44'>
            <h3 style='margin-top: 50px;text-align:left;' class='tibold-1 color-3 txt-center m-b-11'>
                Form Submission Successful!
            </h3>

            <div class='size-a-2 bg-11'></div>
        </div>";
            } else {echo"ERROR SQL QUERY 1";}
    }
}
            
// close the database
mysqli_close($db_connection);


/*


CODE BELOW IS COMMENTED OUT FOR FUTURE USE, I AM ONLY USING THE CODE NECESSARY FOR THE ASSIGNMENT IN ABOVE CODE!!!!
-----------------------------------------------------------------------------------------------------

$string = file_get_contents("config.json");
$option = json_decode($string);

define("MAIL_HOST", $option->MAIL_HOST);
define("MAIL_TITLE", $option->MAIL_TITLE);

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = nl2br($_POST['msg']);
    if (MAIL_HOST != null) {
        $to = MAIL_HOST;
    } else {
        $to = "removedforsecurity@gmail.com";
    }
    $from = $email;
    if (MAIL_TITLE != null) {
        $subject = MAIL_TITLE;
    } else {
        $subject = '[ITClub] Contact Form Message';
    }
    $message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <br><b>Phone:</b> '.$phone.' <br>  <p>'.$msg.'</p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ) {
        $serialized_data = '{"type":"success", "message":"Contact form successfully submitted. Thank you, I will get back to you soon!"}';
        echo $serialized_data;
    } else {
        $serialized_data = '</br></br>{"type":"error", "message":"Contact form failed. Please try again later!"}</br></br>
        You can send mail from localhost with sendmail package , sendmail package is built into XAMPP. So, if you are using XAMPP then you can easily send mail from localhost.</br>

For example you can configure C:\xampp\php\php.ini and c:\xampp\sendmail\sendmail.ini for gmail to send mail. </br>

in <strong>C:\xampp\php\php.ini</strong> find <strong>extension=php_openssl.dll</strong> and remove the semicolon from the beginning of that line to make SSL working for gmail for localhost. </br>

in php.ini file find <strong>[mail function]</strong> and change </br>

SMTP=smtp.gmail.com</br>
smtp_port=587</br>
sendmail_from = my-gmail-id@gmail.com</br>
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"</br>
</br>Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code</br></br>

<strong>[sendmail]</br>

smtp_server=smtp.gmail.com</br>
smtp_port=587</br>
error_logfile=error.log</br>
debug_logfile=debug.log</br>
auth_username=my-gmail-id@gmail.com</br>
auth_password=my-gmail-password</br>
force_sender=my-gmail-id@gmail.com</br></strong></br>
Now you are done!! create php file with mail function and send mail from localhost.</br></br>

PS: don\'t forgot to replace my-gmail-id and my-gmail-password in above code. Also, don\'t forget to remove duplicate keys if you copied settings from above. For example comment following line if there is another sendmail_path : sendmail_path="C:\xampp\mailtodisk\mailtodisk.exe" in the php.ini file

Also remember to restart the server using the XAMMP control panel so the changes take effect.</br></br>';
        echo $serialized_data;
    }
}; */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Form Submission</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/IT_styles.css">
</head>

<body>
    <i style="color: red;">Not being re-directed? Click below to return.</i>
    <br><br><br>
    <i><a class="color-11" href="../index.php">Back to Home</a></i><br><br>
    <i><a class="color-11" href="../contact-us.php#sendusamessage">Back to Message Form</a></i>
    <?php echo "</form>";?>
</body>

</html>
