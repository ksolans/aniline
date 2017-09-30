$(window).scroll(function() {
        $('#home-tagline').each(function(){
        var animatePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos < topOfWindow+500) {
                $('.animate-border-start').addClass('animate-start');
                $('.animate-border-right-lr').addClass('animate-width-full');
                $('.animate-border-right-tb').addClass('animate-height-full');
                $('.animate-border-right-rl').addClass('animate-width-full-reverse');                
                $('.animate-border-left-rl').addClass('animate-width-full-reverse');
                $('.animate-border-left-tb').addClass('animate-height-full');
                $('.animate-border-left-lr').addClass('animate-width-full');
                $('.animate-border-finish').addClass('animate-finish');
            }
        });
        $('#home-convenience').each(function(){
        var animatePos2 = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos2 < topOfWindow+300) {
                $('.animate-convenience-start').addClass('animate-start-convenience');
                $('.animate-convenience-right-lr').addClass('animate-width-convenience');
                $('.animate-convenience-left-rl').addClass('animate-width-convenience-reverse');
                $('.animate-convenience-right-tb').addClass('animate-height-convenience');
                $('.animate-convenience-left-tb').addClass('animate-height-convenience');
                $('.animate-convenience-right-rl').addClass('animate-width-convenience');
                $('.animate-convenience-left-lr').addClass('animate-width-convenience-reverse');
                $('.animate-info-start').addClass('animate-start-info');
            }
        });
        $('#home-patient').each(function(){
        var animatePos2 = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos2 < topOfWindow+500) {
                $('.animate-patient-start').addClass('animate-start-patient');
                $('.animate-patient-vert').addClass('animate-start-patient');
                $('.animate-patient-right-lr').addClass('animate-width-convenience');
                $('.animate-patient-left-rl').addClass('animate-width-convenience-reverse');
                $('.animate-patient-right-tb').addClass('animate-height-patient');
                $('.animate-patient-left-tb').addClass('animate-height-patient');
                $('.animate-patient-right-rl').addClass('animate-width-convenience');
                $('.animate-patient-left-lr').addClass('animate-width-convenience-reverse');
            }
        });
        $('#home-quote').each(function(){
        var animatePos2 = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos2 < topOfWindow+500) {                
                $('.animate-quote-start-1').addClass('animate-start-quote-1'); 
                $('.animate-quote-start-2').addClass('animate-start-quote-2'); 
                $('.animate-quote-finish-1').addClass('animate-finish-quote-1'); 
                $('.animate-quote-finish-2').addClass('animate-finish-quote-2'); 
            }
        });
        $('#home-testimonial-content').each(function(){
        var animatePos2 = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos2 < topOfWindow+500) {
                $('.animate-testimonial-start').addClass('animate-start-testimonial');                
                $('.animate-testimonial-right-lr').addClass('animate-width-testimonial');
                $('.animate-testimonial-left-rl').addClass('animate-width-full-reverse');
                $('.animate-testimonial-right-tb').addClass('animate-height-testimonial');
                $('.animate-testimonial-left-tb').addClass('animate-height-testimonial');
                $('.animate-testimonial-right-rl').addClass('animate-width-full-reverse');
                $('.animate-testimonial-left-lr').addClass('animate-width-testimonial');                
                $('.animate-testimonial-finish').addClass('animate-finish-testimonial');
            }
        });
        $('#practice-quote').each(function(){
        var animatePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos < topOfWindow+500) {
                $('.animate-practice-start').addClass('animate-start');
                $('.animate-practice-right-lr').addClass('animate-width-full');
                $('.animate-practice-right-tb').addClass('animate-practice-height-full');
                $('.animate-practice-right-rl').addClass('animate-width-full-reverse');                
                $('.animate-practice-left-rl').addClass('animate-width-full-reverse');
                $('.animate-practice-left-tb').addClass('animate-practice-height-full');
                $('.animate-practice-left-lr').addClass('animate-width-full');
                $('.animate-practice-finish').addClass('animate-finish-practice');
            }
        });
        $('#info-content').each(function(){
        var animatePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos < topOfWindow+500) {
                $('.animate-practice-info-1-start').addClass('animate-start-patient');
                $('.animate-practice-info-1-vert').addClass('animate-start-patient');
                $('.animate-practice-info-1-right-lr').addClass('animate-width-convenience');
                $('.animate-practice-info-1-left-rl').addClass('animate-width-practice-reverse');
                $('.animate-practice-info-1-right-tb').addClass('animate-height-practice');
                $('.animate-practice-info-1-left-tb').addClass('animate-height-practice');
                $('.animate-practice-info-1-right-rl').addClass('animate-width-convenience');
                $('.animate-practice-info-1-left-lr').addClass('animate-width-convenience');
                $('.animate-practice-info-finish').addClass('animate-height-practice-info-1');
            }
        });
        $('#info-2-content').each(function(){
        var animatePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
            if (animatePos < topOfWindow+500) {
                $('.animate-practice-info-2-start').addClass('animate-start-patient');
                $('.animate-practice-info-2-vert').addClass('animate-start-patient');
                $('.animate-practice-info-2-right-lr').addClass('animate-width-convenience');
                $('.animate-practice-info-2-left-rl').addClass('animate-width-practice-reverse');
                $('.animate-practice-info-2-right-tb').addClass('animate-height-practice-info-2');
                $('.animate-practice-info-2-left-tb').addClass('animate-height-practice-info-2');
                $('.animate-practice-info-2-right-rl').addClass('animate-width-convenience');
                $('.animate-practice-info-2-left-lr').addClass('animate-width-convenience');
                $('.animate-practice-info-2-finish').addClass('animate-height-practice-info-short');
            }
        });
    });