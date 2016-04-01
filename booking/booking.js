/**
 * Created by Xu on 1/04/2016.
 */

function checkNum() {
    var total = 0;
    $("input[name='select[]']").each(function () {
        if (this.checked == true) {
            total++;
        }
    });
    
    if (total == 0) {
        alert("Please choose at least one row.");
    } 
    
    return total > 0;
}