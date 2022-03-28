function validateText(id) {
    if ($("#" + id).val() == null || $("#" + id).val() == "") {
        var div = $("#" + id).closest("div");
        div.removeClass("has-success");
        $("#glypcn" + id).remove();
        div.addClass("has-error has-feedback");
        div.append('<span id="glypcn' + id +
            '" class="glyphicon glyphicon-remove form-control-feedback"></span>');
        return false;
    } else {
        var div = $("#" + id).closest("div");
        div.removeClass("has-error ");
        $("#glypcn" + id).remove();
        div.addClass("has-success has-feedback");
        div.append('<span id="glypcn' + id +
            '" class="glyphicon glyphicon-ok form-control-feedback"></span>');
        return true;
    }
}

var validateEmail = function(element) {
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

    var trype = "#" + element;
    var data = $(trype).val();
    // console.log(trype);
    // console.log(data);
    if (!email_regex.test(data)) {
        var div = $("#" + element).closest("div");
        div.removeClass("has-success");
        $("#glypcn" + element).remove();
        div.addClass("has-error has-feedback");
        div.append('<span id="glypcn' + element +
            '" class="glyphicon glyphicon-remove form-control-feedback"></span>');
        return true;
    } else {
        var div = $("#" + element).closest("div");
        div.removeClass("has-error");
        $("#glypcn" + element).remove();
        div.addClass("has-success has-feedback");
        div.append('<span id="glypcn' + element +
            '" class="glyphicon glyphicon-ok form-control-feedback"></span>');
        return false;
    }
};
var validatemobile = function(element) {
    var mobile_regex = /^\+?([0-9]{2})\)?[ ]?([0-9]{2})[ ]?([0-9]{10})$/;
    var trype = "#" + element;
    var data = $(trype).val();

    if (!mobile_regex.test(data)) {
        var div = $("#" + element).closest("div");
        div.removeClass("has-success");
        $("#glypcn" + element).remove();
        div.addClass("has-error has-feedback");
        div.append('<span id="glypcn' + element +
            '" class="glyphicon glyphicon-remove form-control-feedback"></span>');
        return true;
    } else {
        var div = $("#" + element).closest("div");
        div.removeClass("has-error");
        $("#glypcn" + element).remove();
        div.addClass("has-success has-feedback");
        div.append('<span id="glypcn' + element +
            '" class="glyphicon glyphicon-ok form-control-feedback"></span>');
        return false;
    }
};


$(document).ready(function() {
    $("#contactButton").click(function() {

        //document.getElementById("subForm").style.visibility = "hidden";
        if (!validateText("contactTitle")) {
            document.getElementById("Message").innerHTML = "Title required";
            return false;
        } else {
            document.getElementById("Message").innerHTML = "";
        }
        if (!validateText("contactName")) {
            document.getElementById("Message1").innerHTML = "Name required";
            return false;
        } else {
            document.getElementById("Message1").innerHTML = "";
        }
        if (validateEmail("contactEmail")) {
            document.getElementById("Message2").innerHTML = "Email required";
            return true;
        } else {
            document.getElementById("Message2").innerHTML = "";
        }
        if (validatemobile("contactMobile")) {
            document.getElementById("Message3").innerHTML =
                "Mobile no required ex: +91 22 9876543212";
            return true;
        } else {
            document.getElementById("Message3").innerHTML = "";
        }
        if (!validateText("contactDate1")) {
            document.getElementById("Message4").innerHTML = "Date required";
            return false;
        } else {
            document.getElementById("Message4").innerHTML = "";
        }
        if (!validateText("contacttime")) {
            document.getElementById("Message5").innerHTML = "Time required";
            return false;
        } else {
            document.getElementById("Message5").innerHTML = "";
        }
        if (!validateText("contactServices")) {
            document.getElementById("Message6").innerHTML = "Services required";
            return false;
        } else {
            document.getElementById("Message6").innerHTML = "";
        }
        $('#contactButton').click(function() {
            $('#subForm').css('display', 'block');

        });
    });
});
