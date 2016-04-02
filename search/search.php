<!DOCTYPE html>
<html>
<head>
    <title>Xu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    require "../head.html";
    ?>
    <script src="search.js"></script>
    <script src="../addition/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../addition/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>
    <script>
        var cities = [];

        $(document).ready(function () {
           $("input").autocomplete({
               source : function (request, response) {
                   $.ajax({
                       url : "auto_complete.php",
                       dataType : "text",
                       data : "query=" + request.term,
                       success : function (data, textStatus, jqXHR) {
                           data = data.split(",");
                           cities.push(data);
                           response(data);
                       },
                       error: function (msg) {
                           alert(msg.status + ' ' + msg.statusText);
                       }
                   });
               },
               delay : 500,
               width : 105
           });
        });
    </script>

</head>

<body>
<div id="test">

</div>
<?php
require "../nav.html";
?>

<div class="input" align="center">
    <form name="search" method="get" onsubmit="return search_atLeastOneCityandCityIsCorrect()" action="search_show.php">
        From City: <input id="from_city" name="from_city" type="text" width="200px" autocomplete="off" />&nbsp;&nbsp;
        To City: <input id="to_city" name="to_city" type="text" width="200px" autocomplete="off"/>&nbsp;&nbsp;
        <input type="submit" value="Search!"/>
    </form>
</div>

</body>
</html>