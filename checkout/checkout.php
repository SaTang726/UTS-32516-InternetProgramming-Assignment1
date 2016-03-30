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
        table {
            border-collapse: collapse;
            border-spacing: 0px;
        }
    </style>
</head>
<body>
<?php
require "../nav.html";
?>

<div align="center">
    <form method="get" action="payment.php">
        <table>
            <tr>
                <td>Given Name:</td>
                <td><input type="text" name="given_name" required></td>
            </tr>
            <tr>
                <td>Family Name:</td>
                <td><input type="text" name="family_name" required></td>
            </tr>
            <tr>
                <td>Address Line 1:</td>
                <td><input type="text" name="address_line1" required></td>
            </tr>
            <tr>
                <td>Address Line 2:</td>
                <td><input type="text" name="address_line2"></td>
            </tr>
            <tr>
                <td>Suburb:</td>
                <td><input type="text" name="suburb" required ></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><input type="text" name="state"></td>
            </tr>
            <tr>
                <td>Postcode:</td>
                <td><input type="text" name="postcode"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="country" required></td>
                <td width="80px"><input type="checkbox" name="country_check">Australia</td>
            </tr>
            <tr>
                <td>Email address:</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Mobile phone:</td>
                <td><input type="text" name="mobile_phone"></td>
            </tr>
            <tr>
                <td>Business phone:</td>
                <td><input type="text" name="business_phone"></td>
            </tr>
            <tr>
                <td>Work phone:</td>
                <td><input type="text" name="work_phone"></td>
            </tr>
        </table>
        <input type="submit" value="Stage 2 - Payment Details">
    </form>
</div>


</body>
</html>