<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "../head.html";
    ?>
    <script>
        function changeState(chosen) {
            $("input[value=" + chosen.value + "]").each(function () {
                if (this != chosen) {
                    if (!this.disabled){
                        $(this).attr("checked", false);
                    }
                    $(this).attr("disabled", !this.disabled);
                }
            });

            var total = 0;
            $("input[name='select[]']").each(function () {
                if (this.checked) {
                    total++;
                }
            });

            var out = document.getElementById("output");
            out.innerText = "You have select " + total + " seat.";
        }

        function checkNum() {
            var total = 0;
            $("input[name='select[]']").each(function () {
                if (this.checked) {
                    total++;
                }
            });

            if (total == 0) {
                alert("Please select at least 1 seat.");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>

<?php
require "../nav.html";

session_start();
$checkbox = $_REQUEST['checkbox'];
$tmp_flights = $_SESSION['tmp_flights'];
$choose_checkbox = $tmp_flights[$checkbox];
$_SESSION['choose_flight'] = $choose_checkbox;

?>

<div align="center">
    <form method="get" action="search_finalize.php" onsubmit="return checkNum();">
        <table>
            <tr>
            <th width="80px">Seat No.</th>
            <th width="80px">Departure</th>
            <th width="30px" ></th>
            <th width="80px" >Arrival</th>
            <th width="80px" >Price</th>
            <th width="80px" >Select</th>
            <th width="50px" >Child</th>
            <th width="80px" >Wheelchair</th>
            <th width="100px">Special Diet</th>
            </tr>
            <?php
                for ($count = 0; $count < 5; $count++) {
                    $seat = $count+1;
                    echo '<tr>';
                    echo '<td width="80px" >'.$seat.'</td>';
                    echo '<td width="80px" >'.$choose_checkbox[1].'</td>';
                    echo '<td width="30px" > To </td>';
                    echo '<td width="80px" >'.$choose_checkbox[2].'</td>';
                    echo '<td width="80px" >$'.$choose_checkbox[3].'</td>';
                    echo '<td width="80px" ><input onclick="changeState(this)" type="checkbox" name="select[]" value="'.$count.'"/></td>';
                    echo '<td width="50px" ><input type="checkbox" name="child[]" disabled="disabled" value="'.$count.'"/></td>';
                    echo '<td width="80px" ><input type="checkbox" name="wheel[]" disabled="disabled" value="'.$count.'"/></td>';
                    echo '<td width="100px"><input type="checkbox" name="diet[]" disabled="disabled" value="'.$count.'"/></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <div>
            <p id="output">Please select at least 1 seat.</p>
        </div>
        <input id="button" type="submit" value="Add to Bookings"/>
    </form>
</div>

</body>
</html>