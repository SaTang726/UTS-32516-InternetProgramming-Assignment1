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

$flight_index = 0;
unset($flights);

$_SESSION['flights_index'] = $flight_index;
$_SESSION['flights'] = $flights;

header("Location: search_result.php");
