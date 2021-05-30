
(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#header__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    /* Je veux pouvoir masquer le menu si on clique sur le cache */
    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })
})(jQuery);
(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#link-article').click(function(e){
        e.preventDefault();
        $('.container-article').attr('id', 'show-article');;
    });
})(jQuery);


// changement de couleurs header scroll vers le bas
$(document).ready(function(){       
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 300) {
            $(".header").css('background-color', 'rgba(2,0,0,1)'.replace(/[^,]+(?=\))/, '1'));
        } else {
            $(".header").css('background-color', 'transparent');
        }
    });
});

 // change opacity header (.right) to transparent
/* $(document).ready(function(){ 
    $(window).scroll(function(){ 
        $('.right').css("opacity", 1- $(window).scrollTop() / 50) 
    }) 
})  */
$(document).ready(function(){       
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 350) {
            $(".info-dl").css('background-color', 'rgba(21,22,24,1)'.replace(/[^,]+(?=\))/, '0.8'));
        } else {
            $(".info-dl").css('background-color', 'transparent');
        }
    });
});
