/* global RR: true, TweenMax: true, TimelineMax: true, jQuery: true, ripple: true, Ease: true, Expo: true */
/* jshint unused: false */

/**
 * RR - Material Design Components
 */
var RR = (function (parent, $){
    'use strict';

    var setup = function (){
        var $rippleEffect = $('button, .cta');

        $rippleEffect.on('click', function (e){
            var $this = $(this);

            if ( !$this.hasClass('disabled') ){
                ripple(e, $this);
            }
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