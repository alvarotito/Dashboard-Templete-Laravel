require('./bootstrap');

$(document).ready(function () {

    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
   });

    $('#sidebarCollapse').on('click', function () {
        alert('OK JS');
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

});
