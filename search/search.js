/**
 * 
 * Created by Xu on 31/03/2016.
 */

function search_atLeastOneCityandCityIsCorrect() {
    var city1 = document.getElementById("from_city").value.trim();
    var city2 = document.getElementById("to_city").value.trim();

    if (city1 == "" && city2 == "") {
        alert("Can not be both empty");
        return false;
    }

    if (city1 != "" && !isValidCity0(city1, CITY["from_city"])) {
        alert("From City is wrong");
        return false;
    }

    if (city2 != "" && !isValidCity0(city2, CITY["to_city"])) {
        alert("To City is wrong");
        return false;
    }

    return true;
}

function isValidCity0(city, cities) {
    var flag = false;

    cities.forEach(function (array) {
        array.forEach(function (e) {
            if (e == city) {
                flag = true;
            }
        });
    });

    return flag;
}

