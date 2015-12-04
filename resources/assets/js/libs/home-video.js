$a = jQuery.noConflict();

$a(document).ready(function() {

    $a(".slideshow").css({
        height: $a(window).height() + "px"
    }), 

    $a("#intro-title").css({
        height: 1.078 * $a("#intro-title").width() + "px"
    }), 

    $a("#intro-title").css({
        left: $a(window).width() / 2 - $a("#intro-title").width() / 2 + "px"
    }), 

    $a("#intro-title").css({
        top: $a(window).height() / 2 - $a("#intro-title").height() / 2 + "px"
    }), 

    $a(window).resize(function() {

        $a(".slideshow").css({
            height: $a(window).height() + "px"
        })

        $a("#intro-title").css({
            left: $a(window).width() / 2 - $a("#intro-title").width() / 2 + "px"
        }), 

        $a("#intro-title").css({
            top: $a(window).height() / 2 - $a("#intro-title").height() / 2 + "px"
        })

    })
});