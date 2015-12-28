$(document).ready(function() {

    $(".slideshow").css({
        height: $(window).height() + "px"
    }), 

    $("#intro-title").css({
        height: 1.078 * $("#intro-title").width() + "px"
    }), 

    $("#intro-title").css({
        left: $(window).width() / 2 - $("#intro-title").width() / 2 + "px"
    }), 

    $("#intro-title").css({
        top: $(window).height() / 2 - $("#intro-title").height() / 2 + "px"
    }), 

    $(window).resize(function() {

        $(".slideshow").css({
            height: $(window).height() + "px"
        })

        $("#intro-title").css({
            left: $(window).width() / 2 - $("#intro-title").width() / 2 + "px"
        }), 

        $("#intro-title").css({
            top: $(window).height() / 2 - $("#intro-title").height() / 2 + "px"
        })

    })
});