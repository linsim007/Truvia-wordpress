(function($){
    $( document ).ready(function() {
        $('.news .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        
        $('.truvia-carousel .owl-carousel').owlCarousel({
            center: true,
            items:1,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:1
                }
            }
        });
        
        //smooth scroll 
        
        // Add smooth scrolling to all links
        $("body.page-template-homepage .navbar-nav a.nav-link").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        
        $( ".navbar-nav a.nav-link" ).append( "<span class='dot'>...</span>" );
        
        
        //menu fixed 
        var c, currentScrollTop = 0,
          navbar = $('.header');

          $(window).scroll(function () {
             var a = $(window).scrollTop();
             var b = navbar.height();
            
             currentScrollTop = a;
            
             if (c < currentScrollTop && a > b + b) {
               navbar.addClass("fixed");
             } else if (c > currentScrollTop && !(a <= b)) {
               navbar.removeClass("fixed");
             }
             c = currentScrollTop;
         });
         
        //tabs 
        $('.about .tabs .tab-link.current').parents().addClass('active');
        
        $('.about .tabs .tab-link').click(function(){
            $('.about .tabs .tab-link.current').parents().removeClass('active');
            var tab_id = $(this).attr('data-tab');

            $('.about .tabs .tab-link').removeClass('current');
            $('.about .tabs .directors').removeClass('active');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
            $(this).parents().addClass('active');
        });
        
        
        //another tabs
        //tabs 
        $('.board-directors .tabs-2 .tab-link.current').parents().addClass('active');
        
        $('.board-directors .tabs-2 .tab-link').click(function(){
            $('.board-directors .tabs-2 .tab-link.current').parents().removeClass('active');
            var tab_id = $(this).attr('data-tab');

            $('.board-directors .tabs-2 .tab-link').removeClass('current');
            $('.board-directors .tabs-2 .directors').removeClass('active');
            $('.board-directors .tab-content2').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
            $(this).parents().addClass('active');
        });
        
        
        //tabs for mobile 
        $('.our-directors.tabs.mobile .directors').click(function(){
            $(this).toggleClass('active');
        });
        
        //tabs for mobile 
        $('.our-directors.tabs-2.mobile .directors').click(function(){
            $(this).toggleClass('active');
        });
    });
    
    
})(jQuery)
