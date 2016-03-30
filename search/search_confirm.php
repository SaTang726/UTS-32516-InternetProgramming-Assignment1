<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
    <?php
    require "../head.html";
    ?>
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
    <form method="get" action="search_finalize.php">
        <table>
            <tr>
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
                    echo '<tr>';
                    echo '<td width="80px" >'.$choose_checkbox[1].'</td>';
                    echo '<td width="30px" > To </td>';
                    echo '<td width="80px" >'.$choose_checkbox[2].'</td>';
                    echo '<td width="80px" >$'.$choose_checkbox[3].'</td>';
                    echo '<td width="80px" ><input type="checkbox" name="select[]" value="'.$count.'"/></td>';
                    echo '<td width="50px" ><input type="checkbox" name="child[]" value="'.$count.'"/></td>';
                    echo '<td width="80px" ><input type="checkbox" name="wheel[]" value="'.$count.'"/></td>';
                    echo '<td width="100px"><input type="checkbox" name="diet[]" value="'.$count.'"/></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <input type="submit" value="submit"/>
    </form>
</div>

</body>
</html>