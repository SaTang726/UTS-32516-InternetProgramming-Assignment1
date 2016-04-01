<?php
/**
 * Created by PhpStorm.
 * User: Xu
 * Date: 30/03/2016
 * Time: 9:35 PM
 */
header('Content-Type: application/json');

$sql_query = "SELECT DISTINCT from_city FROM flights WHERE from_city like'".$_REQUEST['query']."%'";

$link = mysql_connect("rerun", "potiro", "pcXZb(kL");

if (!$link)
    die("Could not connect to server");

mysql_select_db("poti", $link);
$result = mysql_query($sql_query);

$num_rows = mysql_num_rows($result);



if ($num_rows > 0) {
    for ($count = 0; $count < $num_rows-1; $count++) {
        $a_row = mysql_fetch_row($result);
        echo $a_row[0];
        echo ",";
    }

    $a_row = mysql_fetch_row($result);
    echo $a_row[0];
}

