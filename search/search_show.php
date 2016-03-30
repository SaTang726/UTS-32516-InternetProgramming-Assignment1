<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    require "../head.html";
    ?>
    <script src="../addition/js/search.js"></script>
</head>

<body>

<?php
require "../nav.html";
?>

    <div align="center">
    <?php
        session_start();

        $from_city = $_REQUEST["from_city"];
        $to_city = $_REQUEST["to_city"];

        $sql_query = 'select route_no, from_city, to_city, price from flights ';

        if (!empty($from_city) && !empty($to_city)) {
            $sql_query = $sql_query.'where from_city = "'.$from_city.'" and to_city="'.$to_city.'"';
        } else if (!empty($from_city)) {
            $sql_query = $sql_query.'where from_city = "'.$from_city.'"';
        } else if (!empty($to_city)) {
            $sql_query = $sql_query.'where to_city = "'.$to_city.'"';
        }

        //echo $sql_query.'<br>';
        //echo 'From City:'.$from_city.'<br>';
        //echo 'To City:'.$to_city.'<br>';

        $link = mysql_connect("rerun", "potiro", "pcXZb(kL");

        if (!$link)
            die("Could not connect to server");

        mysql_select_db("poti", $link);
        $result = mysql_query($sql_query);

        $num_rows = mysql_num_rows($result);
        if ($num_rows > 0) {
            ?>
            <form id="form" name="form" method="get" action="search_confirm.php"><table>
            <?php
            //create a array to store all the result for temporary
            $tmp_flights = array();
            
            while ($a_row = mysql_fetch_row($result)) {
                $tmp_flights[$a_row[0]] = $a_row;
                echo '<tr>';
                echo '<td width="80px">'.$a_row[1].'</td>';
                echo '<td width="30px"> To </td>';
                echo '<td width="80px">'.$a_row[2].'</td>';
                echo '<td width="80px">$'.$a_row[3].'</td>';
                echo '<td><input type="checkbox" name="checkbox" value="'.$a_row[0].'"/></td>';
                echo '</tr>';
            }
            
            //save the tmp_flights to session
            $_SESSION['tmp_flights'] = $tmp_flights;
            ?>
                </table>
            </form>
            <?php
        } else {
            echo "No result returned";
        }
    ?>
    </div>

    <div align="center">
        <br>
        <button name="back_to_search" class="btn btn-default" onclick="location.href='search.php'">< New Search</button>
        &nbsp;&nbsp;&nbsp;
        <button name="confirm" form="form" type="submit" class="btn btn-default">Make Booking for selected flight</button>
    </div>
</body>
</html>