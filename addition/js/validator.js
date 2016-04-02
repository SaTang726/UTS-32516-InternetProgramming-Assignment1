/**
 * Created by Xu on 27/03/2016.
 */


function customedValidator() {
    jQuery.validator.addMethod("isWord", function (value, element) {
        var reg = /^[a-zA-Z]+$/;
        return this.optional(element) || (reg.test(value));
    }, "Need a valid word");

    jQuery.validator.addMethod("isWords", function (value, element) {
        var reg = /^( |[a-zA-Z])+$/;
        return this.optional(element) || (reg.test(value));
    }, "Need some valid words");

    jQuery.validator.addMethod("isAddress", function (value, element) {
        var reg = /^( |[a-zA-Z]|[0-9]|\.|\-)+$/;
        return this.optional(element) || (reg.test(value));
    }, "Need valid words and numbers");

    jQuery.validator.addMethod("isPostcode", function (value, element) {
        if (element.required == false) {
            return true;
        }

        var reg = /^[0-9]{4}$/;
        return this.optional(element) || (reg.test(value));
    }, "Need valid 4 numbers postcode.");

    jQuery.validator.addMethod("isEmail", function (value, element) {
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        return this.optional(element) || (reg.test(value));
    }, "Need valid email.");

    jQuery.validator.addMethod("isCreditCardType", function (value, element) {
        var flag = false;
        var types = ["Visa", "Diners", "Mastercard", "Amex"];
        for (var count = 0; count < types.length; count++) {
            if (types[count] == value) {
                flag = true;
            }
        }

        return this.optional(element) || (flag);
    }, "(Visa, Diners, Mastercard, Amex)");

    jQuery.validator.addMethod("isCreditCardNumber", function (value, element) {
        var reg = /^[0-9]{12}$/;
        return this.optional(element) || (reg.test(value));
    }, "Need a valid 12 card numbers.");

    jQuery.validator.addMethod("isMonth", function (value, element) {
        var reg = /^([1-9]|(10|11|12))$/;
        return this.optional(element) || (reg.test(value));
    }, "Need valid month (1 ~ 12).");

    jQuery.validator.addMethod("isYear", function (value, element) {
        var reg = /^((1[6-9])|([2-9][0-9]))$/;
        return this.optional(element) || (reg.test(value));
    }, "Need valid year (16 ~ 99).");

    jQuery.validator.addMethod("isSecurityCode", function (value, element) {
        var reg = /^[0-9]{3}$/;
        return this.optional(element) || (reg.test(value));
    }, "Security Code is three numbers.");
}