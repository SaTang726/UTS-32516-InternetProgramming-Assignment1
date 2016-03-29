/**
 *
 * Created by Xu on 29/03/2016.
 */


function search(from_city, to_city, url) {
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementsByClassName("out").innerHTML = xmlhttp.responseText;
        }
    }
    
    xmlhttp.open("POST", "booking_refresh.php?a=b&c=d", true);
    xmlhttp.send();
}
