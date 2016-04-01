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
    <h1>Thank You!</h1>
    <h2>Your booking has been completed and a confirmation email has been sent to your email address</h2>
</div>

<?php
session_start();
session_destroy();
?>
</body>
</html>