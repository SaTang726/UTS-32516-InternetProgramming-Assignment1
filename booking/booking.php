<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="../additon/jquery/jquery-1.12.2.min.js"></script>
    <link rel="stylesheet" href="../additon/bootstrap-3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../additon/bootstrap-3.3.6/css/bootstrap-theme.min.css"/>
    <script src="../additon/bootstrap-3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container" align="center">
    <nav class="navbar">
        <a href="../index.html">Home</a>
        <a href="../search/search.html">Search Flight</a>
        <a href="booking.php">Your Bookings</a>
        <a href="../contact/contact.html">Contact</a>
    </nav>
</div>

<div>
    <?php
        require "booking_refresh.php";
    ?>
</div>

</body>
</html>