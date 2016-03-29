<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xu
 * Date: 30/03/2016
 * Time: 1:03 AM
 */

    session_start();
    $flights = $_SESSION['flights'];

    if (!empty($flights)) {
        
        foreach ($flights as $fli) {
            echo $fli;
            echo '<br>';
        }
    } else {
        echo 'You didn\'t choose any flight currently.';
    }