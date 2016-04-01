/**
 * 
 * Created by Xu on 2/04/2016.
 */

function checkDate() {
    var year = document.getElementById("credit_card_expire_year").value.trim();
    var month = document.getElementById("credit_card_expire_month").value.trim();

    var today = new Date();
    var current_month = today.getMonth() + 1;

    if (year == 16) {
        if (current_month >= month) {
            alert("Your credit card is expired.");
            return false;
        }
    }

    return true;
}
