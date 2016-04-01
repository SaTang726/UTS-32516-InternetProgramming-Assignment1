<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <?php
    require "../head.html";
    ?>
</head>
<body>
<?php
require "../nav.html";
?>

<div align="center">
<?php
session_start();
    echo '<p>Name:'.$_SESSION['given_name'].' '.$_SESSION['family_name'].'</p>';
    echo '<p>Address:</p>';
    echo '<p>Email address:'.$_SESSION['email'].'</p>';
?>
</div>

<div align="center">
    <?php
    require "../booking/booking_refresh.php";
    ?>
</div>

<br>
<div align="center">
    <button type="button" onclick="location.href='finalize.php'">Stage 4 - Confirm Payment</button>
</div>
</body>
</html>