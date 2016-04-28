<!DOCTYPE html>
<html lang="en">
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
session_start();
?>
    <label for="personal">Stage 3 of 4 - Review Details</label>
    <br>
    <label for="personal">Personal Details</label>
    <table id="personal">
        <tr>
            <th></th>
            <th width="250px"></th>
        </tr>
        <tr>
            <td style="text-align: right">Name:</td>
            <td><?php echo $_SESSION['given_name'].'&nbsp;&nbsp'.$_SESSION['family_name']; ?></td>
        </tr>
        <tr>
            <td style="text-align: right">Address:</td>
            <td>
                <?php
                echo $_SESSION['address_line1'];
                if (!empty($_SESSION['address_line2'])) {
                    echo '<br>'.$_SESSION['address_line2'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: right">Email:</td>
            <td><?php echo $_SESSION['email']; ?></td>
        </tr>
        <tr>
            <td></td>
            <td style="color: greenyellow;">Credit Card details supplied.</td>
        </tr>
    </table><br><br>

</div>


<div align="center">
    <label for="flight">Flights Details</label>
    <?php
    require "../search/search_result_refresh.php";
    ?>
</div>

<br>
<div align="center">
    <button type="button" onclick="location.href='finalize.php'">Stage 4 - Confirm Payment</button>
</div>
</body>
</html>