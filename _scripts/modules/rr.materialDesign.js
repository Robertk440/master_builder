/* global RR: true, TweenMax: true, TimelineMax: true, jQuery: true, ripple: true, Ease: true, Expo: true */
/* jshint unused: false */

/**
 * RR - Material Design Components
 */
var RR = (function (parent, $){
    'use strict';

    var setup = function (){

        // Ripple Effect
        var $rippleEffect = $('button, .cta');

        $rippleEffect.on('click', function (e){
            var $this = $(this);

            if ( !$this.hasClass('disabled') ){
                ripple(e, $this);
            }
        });


        // Hamburger Menu
        var $materialMenu = $('.material-menu');

        // TimelineMax the menu-icon animation for easier control on Touch/Mouse Events
        var tl = new TimelineMax();

        tl.to( $materialMenu.find('.top'), 0.2, { top: 4, ease: Expo.easeInOut });
        tl.to( $materialMenu.find('.bot'), 0.2, { top: -4, ease: Expo.easeInOut }, '-=0.2');

        tl.to( $materialMenu.find('.mid'), 0.2, { opacity: 0, ease: Expo.easeInOut });
        tl.to( $materialMenu.find('.top'), 0.2, { rotation: 45, ease: Expo.easeInOut }, '-=0.2');
        tl.to( $materialMenu.find('.bot'), 0.2, { rotation: -45, ease: Expo.easeInOut }, '-=0.2');


        // Stop the Timeline at 0 else the animation will play after initiation
        tl.pause();

        $materialMenu.on('click', function (){
            var $this = $(this);

            if ( !$this.hasClass('active') ) {
                $this.addClass('active');

                tl.play();
            } else {
                $this.removeClass('active');

                tl.reverse();
            }
        });


        // Floating Label Input Box
        $('.floating-input').each(function (){
            var $this = $(this);

            $this
                .wrap('<div class="floating"></div>')
                .before('<span class="placeholder">' + $this.attr('placeholder') + '</span>')
                .attr('placeholder', '')
                .on('focus', function (){
                    var $this = $(this);

                    $this.parent().addClass('focus');
                }).on('blur', function (){
                    var $this = $(this);

                    if ( $this.val() === '' ){
                        $this.parent().removeClass('focus');
                    }
                });
        });
    };

    // Export module method
    parent.materialDesign = {
        setup: setup
    };

    return parent;

}(RR || {}, jQuery));

jQuery(function($){
    // Self-init Call
    RR.materialDesign.setup();
});