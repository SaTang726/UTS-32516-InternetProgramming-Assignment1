<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
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
        }

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

session_start();
$checkbox = $_REQUEST['checkbox'];
$tmp_flights = $_SESSION['tmp_flights'];
$choose_checkbox = $tmp_flights[$checkbox];
$_SESSION['choose_flight'] = $choose_checkbox;

?>

<div align="center">
    <form method="get" onsubmit="return checkNum();" action="search_finalize.php">
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
        <input type="submit" value="Add to Bookings"/>
    </form>
</div>

</body>
</html>