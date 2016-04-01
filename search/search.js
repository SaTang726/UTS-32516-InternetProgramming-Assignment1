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

    if (city1 != "" && !isValidateCity(city1)) {
        alert("From City is wrong");
        return false;
    }

    if (city2 != "" && !isValidateCity(city2)) {
        alert("To City is wrong");
        return false;
    }

    return true;
}

function isValidateCity(city) {
    for (var i = 0; i < CITIES.length; i++) {
        if (CITIES[i] == city)
            return true;
    }
    return false;
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