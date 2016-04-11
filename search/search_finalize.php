<?php
/**
 * Created by PhpStorm.
 * User: Xu
 * Date: 30/03/2016
 * Time: 6:56 PM
 */
session_start();

$flights_index = $_SESSION['flights_index'];
if (empty($flights_index)) {
    $flights_index = 0;
}

$flights = $_SESSION['flights'];
$flight_info = $_SESSION['choose_flight'];

$select = $_REQUEST['select'];
$child = $_REQUEST['child'];
$wheel = $_REQUEST['wheel'];
$diet = $_REQUEST['diet'];

foreach ($select as $seat) {
    $tmp = $flight_info;

    if (in_array($seat, $child)) {
        //$tmp['child'] = '*';
        $tmp['child'] = '&radic;';
    } else {
        $tmp['child'] = '';
    }

    if (in_array($seat, $wheel)) {
        //$tmp['wheel'] = '*';
        $tmp['wheel'] = '&radic;';
    } else {
        $tmp['wheel'] = '';
    }

    if (in_array($seat, $diet)) {
        //$tmp['diet'] = '*';
        $tmp['diet'] = '&radic;';
    } else {
        $tmp['diet'] = '';
    }

    $flights[$flights_index++] = $tmp;
}

$_SESSION['flights'] = $flights;
$_SESSION['flights_index'] = $flights_index;

//print_r($flights);

header("Location: ../search/search_result.php");