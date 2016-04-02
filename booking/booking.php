<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>

    <?php
    require "../head.html";
    ?>
    <script>
        function checkNum() {
            var total = 0;
            $("input[name='select[]']").each(function () {
                if (this.checked == true) {
                    total++;
                }
            });

            if (total == 0) {
                alert("Please choose at least one row.");
            }

            return total > 0;
        }
    </script>
</head>

<body>

<?php
require "../nav.html";
?>

<?php
    require "booking_refresh.php";
?>
</body>
</html>