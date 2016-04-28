<!DOCTYPE html>
<html>
<head>
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
        require "search_result_refresh.php";
    ?>
    <?php

    if (!empty($_SESSION['flights'])){
        echo '<div>';
        echo '<button type="button" onclick="location.href=\'search.php\'">Book more Flights</button>';
        echo '<button type="button" onclick="location.href=\'search_result_clear.php\'">Clear all booked flights</button>';
        echo '<button type="button" onclick="location.href=\'../checkout/checkout.php\'">Proceed to Checkout</button>';
        echo '</div>';
    }

    ?>
</div>

</body>
</html>