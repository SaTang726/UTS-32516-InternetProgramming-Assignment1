<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
    <?php
    require "../head.html";
    ?>
</head>
<body>

<?php
require "../nav.html";
?>

<?php
session_start();


$first_name = $_SESSION['given_name'];
$last_name = $_SESSION['family_name'];
$hi_msg = 'Dear '.$first_name.' '.$last_name.':
';

$address_line1 = $_SESSION['address_line1'];
$address_line2 = $_SESSION['address_line2'];
if (!empty($address_line2)) {
    $address = $address_line1.'
                 '.$address_line2;
} else {
    $address = $address_line1;
}

$email = $_SESSION['email'];
$subject = 'Flight Travel Receipt';

$flights = $_SESSION['flights'];
$length = count($flights);
$flight_msg = '';
for ($count = 0; $count < $length; $count++){
    $fli = $flights[$count];
    if (empty($fli)) { continue; }
    $flight_msg .= $fli[1].'      '.$fli[2].'      $'.$fli[3];

    if ($fli['child'] == "*") {
        $flight_msg .= '      Child';
    }
    if ($fli['wheel'] == "*") {
        $flight_msg .= '      Wheelchair';
    }
    if ($fli['diet'] == "*") {
        $flight_msg .= '      SpecialDiet';
    }

    $flight_msg .= '
';
}



$message = '
The following is your booking details:
Name:    '.$first_name.' '.$last_name.'
Address: '.$address.'
     
Flights:
'.$flight_msg.'

';


mail($email, $subject, $message, $hi_msg);





?>

<div align="center">
    <h1>Thank You!</h1>
    <h2>Your booking has been completed and a confirmation email has been sent to your email address</h2>
</div>

<?php
session_start();
session_destroy();
?>
</body>
</html>