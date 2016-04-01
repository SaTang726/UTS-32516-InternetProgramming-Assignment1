/**
 *
 * Created by Xu on 1/04/2016.
 */


function uncheckOtherCheckBox(chosen) {
    $("input[name='checkbox']").each(function () {
        if (this != chosen) {
            $(this).attr("checked", false);
        }
    });
}

function choose_at_list_one() {
    var total = 0;
    $("input[name='checkbox']").each(function () {
        if (this.checked == true) {
            total++;
        }
    });
    
    if (total == 0) {
        alert("Please choose at least one row.");
    }
    
    return total > 0;
}