<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    require "../head.html";
    ?>

    <style>
        td {
            text-align: left;
        }
    </style>
</head>

<body>

<?php
require "../nav.html";
?>

<div align="center">
    <form method="post" action="send_mail.php">
        <table>
            <tr>
                <td style="text-align: right">Subject:</td>
                <td><input type="text" name="subject" required/></td>
            </tr>
            <tr>
                <td style="text-align: right">Email address:</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td style="text-align: right">First name:</td>
                <td><input type="text" name="first_name"/></td>
            </tr>
            <tr>
                <td style="text-align: right">last name:</td>
                <td><input type="text" name="last_name"/></td>
            </tr>
            <tr>
                <td style="text-align: right" valign="1">Email contents:</td>
                <td><textarea name="content" style="width: 300px; height: 200px;resize: none;" required title="Content"></textarea></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Send Email">
    </form>
</div>

</body>
</html>