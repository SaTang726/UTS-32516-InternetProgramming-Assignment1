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
        $total_cost = 0;
        ?>
        <table id="flight">
        <tr>
        <th width="80px">Departure</th>
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
            echo '<td width="80px">'.$fli[2].'</td>';
            echo '<td width="80px">$'.$fli[3].'</td>';
            echo '<td width="100px">'.$fli['child'].'</td>';
            echo '<td width="100px">'.$fli['wheel'].'</td>';
            echo '<td width="100px">'.$fli['diet'].'</td>';
            echo '</tr>';
            $total_cost += $fli[3];
        }
        ?>
        </table>
        <div>
            <p><?php
                echo 'Total: '.$count.' Flights<br>Total cost: $'.$total_cost;
                ?>
            </p>
        </div>

        <?php
        
    } else {
        echo '<b><p>You have no bookings.</p></b>';
        ?>
            <div>
                <button type="button" onclick="location.href='search.php'">Book more Flights</button>
            </div>
        <?php
    }