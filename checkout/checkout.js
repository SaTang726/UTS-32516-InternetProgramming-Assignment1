/**
 * 
 * Created by Xu on 1/04/2016.
 */

var isAustralia = false;

function checkCountry(country) {
    if (country.value != "Australia" && isAustralia) {
        isAustralia = false;

        $("#state").attr("required", false);
        $("#postcode").attr("required", false);
        document.getElementById("red_state").innerText = "optional";
        document.getElementById("red_postcode").innerText = "optional";
    } else if (country.value == "Australia" && !isAustralia) {
        isAustralia = true;

        $("#state").attr("required", true);
        $("#postcode").attr("required", true);
        document.getElementById("red_state").innerText = "*";
        document.getElementById("red_postcode").innerText = "*";
    }
}
