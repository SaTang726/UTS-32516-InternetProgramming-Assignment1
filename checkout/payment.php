<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <?php
    require "../head.html";
    ?>
    <style>
        td {
            text-align: right;
        }
    </style>
</head>
<body>
<?php
require "../nav.html";
?>

<div align="center">
    <form method="get" action="review.php">
        <table>
            <tr>
                <td>Credit Card type:</td>
                <td><input type="text" name="credit_card_type" required></td>
            </tr>
            <tr>
                <td>Credit Card number:</td>
                <td><input type="text" name="credit_card_num" required></td>
            </tr>
            <tr>
                <td>Name on Credit Card:</td>
                <td><input type="text" name="credit_card_name" required/></td>
            </tr>
            <tr>
                <td>Expiry month/year:</td>
                <td align="center"><input type="text" name="credit_card_expire_month" size="3" required>
                    /20<input type="text" name="credit_card_expire_year" size="3" required></td>
            </tr>
            <tr>
                <td>Security code:</td>
                <td><input type="text" name="credit_card_security_code" required></td>
            </tr>
        </table>
        <input type="submit" value="Stage 3 - Review Bookings and Detaisl"/>
    </form>
</div>

</body>
</html>