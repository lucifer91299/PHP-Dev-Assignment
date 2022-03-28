//past dates disabled
$(document).ready(function() {
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var Year = dtToday.getFullYear();
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();
    var maxDate = Year + '-' + month + '-' + day;

    $('#contactDate1').attr('min', maxDate);
});
