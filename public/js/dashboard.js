jQuery(function () {

    $("#sidebar").mCustomScrollbar({
        theme: "minimal",
        scrollInertia: 0
    });

    $("#content").mCustomScrollbar({
        scrollInertia: 0
    });

    $('#sidebarCollapse').on("click", function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('#navbar').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });



});
