<!DOCTYPE html>
<html>
<head>
    <?php
    require "../head.html";
    ?>
    <script src="../addition/jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
    <script src="../addition/js/validator.js"></script>
    <script>
        $(function () {
            customedValidator();
            $("#contact").validate({
                rules : {
                    subject : {},
                    email : {
                        isEmail : true
                    },
                    first_name : {
                        isWords : true
                    },
                    last_name : {
                        isWords : true
                    },
                    content : {

                    }
                },
                errorPlacement : function (error, element) {
                    error.appendTo(element.parent().parent());
                },
                errorElement : "td"
            });
        });
    </script>

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
    <form id="contact" method="post" action="send_mail.php">
        <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: right">Subject:</td>
                <td><input id="subject" type="text" name="subject" required/></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td style="text-align: right">Email address:</td>
                <td><input id="email" type="text" name="email" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td style="text-align: right">First name:</td>
                <td><input id="first_name" type="text" name="first_name"/></td>
            </tr>
            <tr>
                <td style="text-align: right">last name:</td>
                <td><input id="last_name" type="text" name="last_name"/></td>
            </tr>
            <tr>
                <td style="text-align: right" valign="1">Email contents:</td>
                <td><textarea id="content" name="content" style="width: 300px; height: 200px;resize: none;" required></textarea></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Send Email">
    </form>
</div>

</body>
</html>