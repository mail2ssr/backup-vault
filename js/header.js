function header(){
    $('#nav-toggle').on('click',function(e){
        e.preventDefault();
        $('body').toggleClass('header-active');     
    });

    $('.menu-item__parent').each(function(){
        let block = $(this);
        let btn = $(this).find('.menu-item__icon');
        let subNav = $(this).next();
        btn.on('click',function(e){
            e.preventDefault();
            subNav.slideToggle();
            block.toggleClass('active');
        });
    })
    
    $(function() {
        
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 10) {
                    $("body").addClass('scrolled');
                } else {
                    //remove the background property so it comes transparent again (defined in your css)
                    $("body").removeClass('scrolled');
                }
            });
        
    });
