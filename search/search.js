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

    if (city1 != "" && !isValidCity1(city1)) {
        alert("From City is wrong");
        return false;
    }

    if (city2 != "" && !isValidCity1(city2)) {
        alert("To City is wrong");
        return false;
    }

    return true;
}

function isValidCity0(city) {
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

function isValidCity1(city) {
    var flag = false;

    CITIES.forEach(function (e) {
        if (e == city) {
            flag = true;
        }
    });

    return flag;
}

CITIES = ["Sydney",
    "Canberra"      ,
    "Newcastle"     ,
    "Broken Hill"   ,
    "Melbourne"     ,
    "Bendigo"       ,
    "Adelaide"      ,
    "Darwin"        ,
    "Alice Springs" ,
    "Perth"         ,
    "Albany"        ,
    "Kalgoorlie"    ,
    "Broome"        ,
    "Launceston"    ,
    "Hobart"        ,
    "Brisbane"      ,
    "Mt Isa"        ,
    "Rockhampton"   ,
    "Cairns"        ,
    "Pt Augusta"   ];