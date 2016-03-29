<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="jquery/jquery-1.12.2.min.js"></script>
    <script src="js/search.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap-theme.min.css"/>
    <script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container" align="center">
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="search.html">Search Flight</a>
        <a href="booking.php">Your Bookings</a>
        <a href="contact.html">Contact</a>
    </nav>
</div>

    <?php
        $from_city = $_REQUEST["from_city"];
        $to_city = $_REQUEST["to_city"];

        $sql_query = 'select route_no, from_city, to_city, price from flights ';

        if (!empty($from_city) && !empty($to_city)) {
            $sql_query = $sql_query.'where from_city = "'.$from_city.'" and to_city="'.$to_city.'"';
        } else if (!empty($from_city)) {
            $sql_query = $sql_query.'where from_city = "'.$from_city.'"';
            echo 'arrive';
        } else if (!empty($to_city)) {
            $sql_query = $sql_query.'where to_city = "'.$to_city.'"';
        }

        echo $sql_query.'<br>';
        echo 'From City:'.$from_city.'<br>';
        echo 'To City:'.$to_city.'<br>';

        $link = mysql_connect("rerun", "potiro", "pcXZb(kL");

        if (!$link)
            die("Could not connect to server");

        mysql_select_db("poti", $link);
        $result = mysql_query($sql_query);

        $num_rows = mysql_num_rows($result);
        if ($num_rows > 0) {
            while ($a_row = mysql_fetch_row($result)) {
                foreach ($a_row as $field) {
                    echo $field;
                    echo '&nbsp;&nbsp;';
                }
                echo '<br>';
            }
        } else {
            echo "No result returned";
        }
    ?>
    <br>
    <button name="back_to_search" class="btn btn-default" onclick="location.href='search.html'">< New Search</button>
    &nbsp;&nbsp;&nbsp;
    <button name="booking" class="btn btn-default" onclick="location.href='booking.php'">Make Booking for selected flight</button>
</body>
</html>