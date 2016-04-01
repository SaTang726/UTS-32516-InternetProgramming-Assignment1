<?php
/**
 * Created by PhpStorm.
 * User: Xu
 * Date: 30/03/2016
 * Time: 9:36 PM
 */

session_start();
$flight_index = $_SESSION['flights_index'];
$flights = $_SESSION['flights'];

$selects = $_REQUEST['select'];

for ($i = count($selects)-1; $i >= 0; $i--){
    $num = $selects[$i];

    if ($flight_index == 1) {
        unset($flights);
        $flight_index--;
    } else {
        $flights = delete_index_and_trim($num, $flights);
        $flight_index--;
    }
}

$_SESSION['flights_index'] = $flight_index;
$_SESSION['flights'] = $flights;


function delete_index_and_trim($num, $array) {
    unset($array[$num]);
    array_unshift($array, array_shift($array));
    return $array;
}

header("Location: ../booking/booking.php");
