$(document).ready(function() {
    // Inject link title into buttons
    $(".dx-labeled-buttons").each(function() {
        title = $(this).children('span').attr('title');
        if(title != '') {
            $(this).children('span').append(' ' + title);
        }
    });
});