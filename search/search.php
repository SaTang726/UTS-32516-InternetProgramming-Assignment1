<!DOCTYPE html>
<html>
<head>
    <?php
    require "../head.html";
    ?>
    <script src="search.js"></script>
    <script src="../addition/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../addition/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>
    <script>
        var CITY = [];
        CITY["from_city"] = [];
        CITY["to_city"] = [];

        $(document).ready(function (){
            $("input").each(function (index, element) {
                var city_type = element.name;
                
                $(this).autocomplete({
                    source : function (request, response) {
                        $.ajax({
                            url : "auto_complete.php",
                            dataType : "text",
                            data : "query=" + city_type + "-" + request.term,
                            success : function (data, textStatus, jqXHR) {
                                data = data.split(",");
                                CITY[city_type].push(data);
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
    <form id="form1" name="search" method="get" onsubmit="return search_atLeastOneCityandCityIsCorrect()" action="search_show.php">
        From City: <input id="from_city" name="from_city" type="text" width="200px" autocomplete="off" />&nbsp;&nbsp;
        To City: <input id="to_city" name="to_city" type="text" width="200px" autocomplete="off"/>&nbsp;&nbsp;
        <button form="form1" type="submit">Search!</button>
    </form>
</div>

</body>
</html>