<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <?php
    require "../head.html";
    ?>
    <script src="../addition/jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
    <script src="payment.js"></script>
    <script>
        $(function () {
            jQuery.validator.addMethod("isCreditCardType", function (value, element) {
                var flag = false;
                var types = ["Visa", "Diners", "Mastercard", "Amex"];
                for (var count = 0; count < types.length; count++) {
                    if (types[count] == value) {
                        flag = true;
                    }
                }

                return this.optional(element) || (flag);
            }, "(Visa, Diners, Mastercard, Amex)");

            jQuery.validator.addMethod("isCreditCardNumber", function (value, element) {
                var reg = /^[0-9]{12}$/;
                return this.optional(element) || (reg.test(value));
            }, "Need a valid 12 card numbers.");

            jQuery.validator.addMethod("isWords", function (value, element) {
                var reg = /^( |[a-zA-Z])+$/;
                return this.optional(element) || (reg.test(value));
            }, "Need some valid words.");

            jQuery.validator.addMethod("isMonth", function (value, element) {
                var reg = /^([1-9]|(10|11|12))$/;
                return this.optional(element) || (reg.test(value));
            }, "Need valid month (1 ~ 12).");

            jQuery.validator.addMethod("isYear", function (value, element) {
                var reg = /^((1[6-9])|([2-9][0-9]))$/;
                return this.optional(element) || (reg.test(value));
            }, "Need valid year (16 ~ 99).");

            jQuery.validator.addMethod("isSecurityCode", function (value, element) {
                var reg = /^[0-9]{3}$/;
                return this.optional(element) || (reg.test(value));
            }, "Security Code is three numbers.");

            $("#form1").validate({
                rules : {
                    credit_card_type : {
                        isCreditCardType : true
                    },
                    credit_card_num : {
                        isCreditCardNumber : true
                    },
                    credit_card_name : {
                        isWords : true
                    },
                    credit_card_expire_month : {
                        isMonth : true
                    },
                    credit_card_expire_year : {
                        isYear : true
                    },
                    credit_card_security_code : {
                        isSecurityCode : true
                    }
                },
                errorElement : "td",
                errorPlacement : function (error, element) {
                    error.appendTo(element.parent().parent());
                }
            });
        });
    </script>
</head>
<body>
<?php
require "../nav.html";
?>
<?php
session_start();
$_SESSION['given_name'] = $_REQUEST['given_name'];
$_SESSION['family_name'] = $_REQUEST['family_name'];

$_SESSION['address_line1'] = $_REQUEST['address_line1'];
$address_line2 = $_REQUEST['address_line2'];
if (!empty($address_line2)) {
    $_SESSION['address_line2'] = $address_line2;
}

$_SESSION['email'] = $_REQUEST['email'];

?>


<div align="center">
    <form id="form1" method="get" onsubmit="return checkDate();" action="review.php">
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Credit Card type:</td>
                <td><input id="credit_card_type" type="text" name="credit_card_type" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Credit Card number:</td>
                <td><input id="credit_card_num" type="text" name="credit_card_num" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Name on Credit Card:</td>
                <td><input id="credit_card_name" type="text" name="credit_card_name" required/></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Expiry month/year:</td>
                <td align="center"><input id="credit_card_expire_month" type="text" name="credit_card_expire_month" size="3" required/>
                    /20<input id="credit_card_expire_year" type="text" name="credit_card_expire_year" size="3" required/></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Security code:</td>
                <td><input id="credit_card_security_code" type="text" name="credit_card_security_code" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
        </table>
        <input type="submit" value="Stage 3 - Review Bookings and Detaisl"/>
    </form>
</div>

</body>
</html>