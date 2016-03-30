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
        $length = count($flights);

        ?>
        <table>
        <tr>
        <th width="80px">Departure</th>
        <th width="30px" >Count</th>
        <th width="80px" >Arrival</th>
        <th width="80px" >Price</th>
        <th width="100px" >Child</th>
        <th width="100px" >Wheelchair</th>
        <th width="100px">Special Diet</th>
        </tr>
        <?php
        for ($count = 0; $count < $length; $count++) {
            $fli = $flights[$count];
            if (empty($fli)) {
                continue;
            }
            echo '<tr>';
            echo '<td width="80px">'.$fli[1].'</td>';
            echo '<td width="30px">'.$count.'</td>';
            echo '<td width="80px">'.$fli[2].'</td>';
            echo '<td width="80px">'.$fli[3].'</td>';
            echo '<td width="100px">'.$fli['child'].'</td>';
            echo '<td width="100px">'.$fli['wheel'].'</td>';
            echo '<td width="100px">'.$fli['diet'].'</td>';
            echo '</tr>';
        }
        ?>
        </table>
        <div>
            <button type="button" onclick="location.href='../checkout/checkout.php'">Proceed to Checkout</button>
        </div>
        <?php
        
    } else {
        echo 'You have no bookings.';
    }