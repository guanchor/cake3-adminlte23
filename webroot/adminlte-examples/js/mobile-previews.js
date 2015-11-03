$(function() {
    function _fix() {
        var h = $(window).height();
        var w = $(window).width();
        $("#preview-iframe").css({
            width: w + "px",
            height: (h - 50) + "px"
        });
    }
    _fix();
    $(window).resize(function() {
        _fix();
    });
    $('[data-toggle="tooltip"]').tooltip();

    function iframe_width(width) {
        $("#preview-iframe").animate({width: width}, 500);
    }

    $("#display-full").click(function(e){
        e.preventDefault();
        iframe_width("100%");
    });

    $("#display-940").click(function(e){
        e.preventDefault();
        iframe_width("940px");
    });

    $("#display-480").click(function(e){
        e.preventDefault();
        iframe_width("480px");
    });
});
