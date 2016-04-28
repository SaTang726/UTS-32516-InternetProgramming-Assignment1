<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "../head.html";
    ?>
    <script src="../addition/jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
    <script src="../addition/js/validator.js"></script>
    <script>
        var isAustralia = false;

        function checkCountry(country) {
            if (country.value != "Australia" && isAustralia) {
                isAustralia = false;

                $("#state").attr("required", false);
                $("#postcode").attr("required", false);
                document.getElementById("red_state").innerText = "optional";
                document.getElementById("red_postcode").innerText = "optional";
            } else if (country.value == "Australia" && !isAustralia) {
                isAustralia = true;

                $("#state").attr("required", true);
                $("#postcode").attr("required", true);
                document.getElementById("red_state").innerText = "*";
                document.getElementById("red_postcode").innerText = "*";
            }
        }
        
        $(function () {
            customedValidator();

            $("#form1").validate({
                rules : {
                    given_name : {
                        isWord : true
                    },
                    family_name : {
                        isWord: true
                    },
                    address_line1 : {
                        isAddress : true
                    },
                    address_line2 : {
                        isAddress : true
                    },
                    suburb : {
                        isWords: true
                    },
                    state : {
                        isWords : true
                    },
                    postcode : {
                        isPostcode : true,
                        digits : true
                    },
                    country : {
                        isWords : true
                    },
                    email : {
                        isEmail : true
                    },
                    mobile_phone : {
                        digits : true
                    },
                    business_phone : {
                        digits : true
                    },
                    work_phone : {
                        digits : true
                    }
                },
                errorElement : "td",
                errorPlacement : function (error, element) {
                    error.appendTo(element.parent().parent());
                }
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
    <label for="form1" >Complete Booking - stage 1 of 4 - Personal Details</label>
    <form id="form1" method="get" action="payment.php">
        <table border="0px">
            <tr>
                <td>Given Name:</td>
                <td><input id="given_name" type="text" name="given_name" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Family Name:</td>
                <td><input id="family_name" type="text" name="family_name" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Address Line 1:</td>
                <td><input id="address_line1" type="text" name="address_line1" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Address Line 2:</td>
                <td><input id="address_line2" type="text" name="address_line2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Suburb:</td>
                <td><input id="suburb" type="text" name="suburb" required ></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>State:</td>
                <td><input id="state" type="text" name="state"></td>
                <td width="60px" id="red_state" style="color: #FF0000; text-align: left">optional</td>
            </tr>
            <tr>
                <td>Postcode:</td>
                <td><input id="postcode" type="text" name="postcode"></td>
                <td width="60px" id="red_postcode" style="color: #FF0000; text-align: left">optional</td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input id="country" type="text" name="country" required oninput="checkCountry(this)"></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Email address:</td>
                <td><input id="email" type="text" name="email" required></td>
                <td width="60px" style="color: #FF0000; text-align: left">*</td>
            </tr>
            <tr>
                <td>Mobile phone:</td>
                <td><input id="mobile_phone" type="text" name="mobile_phone"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Business phone:</td>
                <td><input id="business_phone" type="text" name="business_phone"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Work phone:</td>
                <td><input id="work_phone" type="text" name="work_phone"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="color: #FF0000;">*</td>
                <td>Means compulsory.</td>
            </tr>
        </table>
        <input type="submit" value="Stage 2 - Payment Details">
    </form>
</div>

</body>
</html>