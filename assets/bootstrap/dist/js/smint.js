// Scroll page with easing effect
    $('.button-cover a[href*=#]').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(target, 1500, {
            easing: 'easeOutCubic'
        });

        $(".btn-navbar").click();
    });


    $('#footerMenu a[href*=#]').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(target, 1500, {
            easing: 'easeOutCubic'
        });

        $(".btn-navbar").click();
    });




    $(window).scroll(function(){
        if($(this).scrollTop()>200){
            $(".go-top").fadeIn(200);
        }
        else{
            $(".go-top").fadeOut(200);
        }
    });


    $(".brand, .go-top").click(function(event){
        event.preventDefault();

        $.scrollTo('#carouselSection', 1500, {
            easing: 'easeOutCubic'
        });
    });



$(function(){




});
