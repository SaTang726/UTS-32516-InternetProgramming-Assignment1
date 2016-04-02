<?php
/**
 * Created by PhpStorm.
 * User: Xu
 * Date: 30/03/2016
 * Time: 9:35 PM
 *
 * Input message type: query=$city_type-$word
 * $_REQUEST['query'] to get message
 * $city_type: from_city or to_city
 * $word: which need to query
 *
 * Output message type $result, $result, $result
 * separate by ","   not in the begin and end
 */

header('Content-Type: application/json');

$msg = $_REQUEST['query'];
$msg = explode("-", $msg);

$sql_query = "SELECT DISTINCT ".$msg[0]." FROM flights WHERE ".$msg[0]." like'".$msg[1]."%'";

$link = mysql_connect("rerun", "potiro", "pcXZb(kL");

if (!$link)
    die("error!");

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

