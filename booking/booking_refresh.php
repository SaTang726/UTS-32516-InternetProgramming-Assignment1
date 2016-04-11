<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xu
 * Date: 30/03/2016
 * Time: 1:03 AM
 */

    session_start();
    $flights = $_SESSION['flights'];

echo '<div>';
    if (!empty($flights)) {
        $length = count($flights);

        ?>
        <form id="form" name="form" method="get" onsubmit="return checkNum();" action="booking_delete.php">
        <table>
        <tr>
        <th width="80px">Departure</th>
        <th width="80px" >Arrival</th>
        <th width="80px" >Price</th>
        <th width="100px" >Child</th>
        <th width="100px" >Wheelchair</th>
        <th width="100px">Special Diet</th>
        <th width="50px">Select</th>
        </tr>
        <?php
        $total_cost = 0;
        for ($count = 0; $count < $length; $count++) {
            $fli = $flights[$count];
            if (empty($fli)) {
                continue;
            }
            echo '<tr>';
            echo '<td width="80px">'.$fli[1].'</td>';
            echo '<td width="80px">'.$fli[2].'</td>';
            echo '<td width="80px">$'.$fli[3].'</td>';
            echo '<td width="100px">'.$fli['child'].'</td>';
            echo '<td width="100px">'.$fli['wheel'].'</td>';
            echo '<td width="100px">'.$fli['diet'].'</td>';
            echo '<td width="50px"><input type="checkbox" name="select[]" value="'.$count.'"/> </td>';
            echo '</tr>';
            $total_cost += $fli[3];
        }
        echo '</form>';
        //print_r($flights);
        echo '</table>';
        echo '<div>
                <p>Total : '.$length.' flights<br>Total cost: $'.$total_cost.'</p>
              </div>';
        echo '<div>';
        echo '<button form="form" type="submit">Delete selected Flights</button>';
        echo '<button type="button" onclick="location.href=\'../checkout/checkout.php\'">Proceed to Checkout</button>';
        echo '</div>';
    } else {
        echo '<b><p>You have no bookings.</p></b>';
    }
echo '</div>';