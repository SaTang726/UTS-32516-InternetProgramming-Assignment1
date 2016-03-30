<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    require "../head.html";
    ?>
</head>

<body>

<?php
require "../nav.html";
?>

<div class="input" align="center">
    <form name="search" method="get" action="search_show.php">
        From City: <input name="from_city" type="text" size="20" autofocus/>&nbsp;&nbsp;
        To City: <input name="to_city" type="text" size="20" />&nbsp;&nbsp;
        <input class="btn btn-default" type="submit" value="Search!"/>
    </form>
</div>

</body>
</html>