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
print_r($_REQUEST);
$address = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['content'];

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];

$hi_msg = 'Dear';
if (!empty($first_name)) {
    $hi_msg = $hi_msg.' '.$first_name;
}
if (!empty($last_name)) {
    $hi_msg = $hi_msg.' '.$last_name;
}
if (empty($first_name) && empty($last_name)) {
    $hi_msg = $hi_msg.' Sir/Madam';
}
$hi_msg = $hi_msg.':
This email is sent from XC';
print_r($hi_msg);

mail($address, $subject, $message, $hi_msg);
?>

<div align="center">
    <h3>Email has been sent.</h3>
</div>

</body>
</html>