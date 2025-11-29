jQuery(document).ready(function($) {
    $('p').each(function() {
        if ($(this).text().trim() === '' || $(this).html().trim() === '&nbsp;') {
            $(this).hide();
        }
    });
});