

$(document).ready(function () {

    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $("#content").mCustomScrollbar({
        scrollInertia: 0,
        // axis: "xy",
        // advanced: {autoExpandedHorizontalScroll: true},
    });

    $('#sidebarCollapse').click( function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('#navbar').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });



});
