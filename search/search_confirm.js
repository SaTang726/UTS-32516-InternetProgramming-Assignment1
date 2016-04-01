/**
 * Created by Xu on 1/04/2016.
 */

function changeState(chosen) {
    $("input[value=" + chosen.value + "]").each(function () {
        if (this != chosen) {
            if (!this.disabled){
                $(this).attr("checked", false);
            }
            $(this).attr("disabled", !this.disabled);
        }
    });
}

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